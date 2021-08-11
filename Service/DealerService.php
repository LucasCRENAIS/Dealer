<?php
/*************************************************************************************/
/*      This file is part of the Thelia package.                                     */
/*                                                                                   */
/*      Copyright (c) OpenStudio                                                     */
/*      email : dev@thelia.net                                                       */
/*      web : http://www.thelia.net                                                  */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/
/*************************************************************************************/

namespace Dealer\Service;

use Dealer\Event\DealerEvent;
use Dealer\Event\DealerEvents;
use Dealer\Model\Dealer;
use Dealer\Model\DealerQuery;
use Dealer\Service\Base\AbstractBaseService;
use Dealer\Service\Base\BaseServiceInterface;
use Symfony\Component\EventDispatcher\Event;
use Thelia\Core\Event\ActionEvent;

/**
 * Class DealerService
 * @package Dealer\Service
 */
class DealerService extends AbstractBaseService implements BaseServiceInterface
{
    const EVENT_CREATE = DealerEvents::DEALER_CREATE;
    const EVENT_CREATE_BEFORE = DealerEvents::DEALER_CREATE_BEFORE;
    const EVENT_CREATE_AFTER = DealerEvents::DEALER_CREATE_AFTER;
    const EVENT_DELETE = DealerEvents::DEALER_DELETE;
    const EVENT_DELETE_BEFORE = DealerEvents::DEALER_DELETE_BEFORE;
    const EVENT_DELETE_AFTER = DealerEvents::DEALER_DELETE_AFTER;
    const EVENT_UPDATE = DealerEvents::DEALER_UPDATE;
    const EVENT_UPDATE_BEFORE = DealerEvents::DEALER_UPDATE_BEFORE;
    const EVENT_UPDATE_AFTER = DealerEvents::DEALER_UPDATE_AFTER;

    protected function createProcess(ActionEvent $event)
    {
        $event->getDealer()->save();
    }

    protected function updateProcess(ActionEvent $event)
    {
        $event->getDealer()->save();
    }

    protected function deleteProcess(ActionEvent $event)
    {
        $event->getDealer()->delete();
    }

    public function createFromArray($data, $locale = null)
    {
        $dealer = $this->hydrateObjectArray($data, $locale);

        $event = new DealerEvent();
        $event->setDealer($dealer);

        $this->create($event);

        return $event->getDealer();
    }

    public function updateFromArray($data, $locale = null)
    {
        $dealer = $this->hydrateObjectArray($data, $locale);

        $event = new DealerEvent();
        $event->setDealer($dealer);

        $this->update($event);

        return $event->getDealer();
    }

    public function deleteFromId($id)
    {
        $dealer = DealerQuery::create()->findOneById($id);
        if ($dealer) {
            $event = new DealerEvent();
            $event->setDealer($dealer);

            $this->delete($event);
        }
    }


    public function toggleVisibilityFromId($id)
    {
        $dealer = DealerQuery::create()->findOneById($id);

        $dealer->setVisible($dealer->getVisible() ? 0 : 1);

        $event = new DealerEvent();
        $event->setDealer($dealer);

        $this->update($event);

        return $event->getDealer();
    }

    protected function hydrateObjectArray($data, $locale = null)
    {
        $model = new Dealer();

        if (isset($data['id'])) {
            $dealer = DealerQuery::create()->findOneById($data['id']);
            if ($dealer) {
                $model = $dealer;
            }
        }

        if ($locale) {
            $model->setLocale($locale);
        }

        // Require Field
        if (isset($data['title'])) {
            $model->setTitle($data['title']);
        }
        if (isset($data['address1'])) {
            $model->setAddress1($data['address1']);
        }
        if (isset($data['zipcode'])) {
            $model->setZipcode($data['zipcode']);
        }
        if (isset($data['city'])) {
            $model->setCity($data['city']);
        }
        if (isset($data['country_id'])) {
            $model->setCountryId($data['country_id']);
        }
        if (isset($data['visible'])) {
            $model->setVisible($data['visible']);
        }

        //  Optionnal Field
        if (isset($data['description'])) {
            $model->setDescription($data['description']);
        } else {
            $model->setDescription(null);
        }

        //  Optionnal Field
        if (isset($data['big_description'])) {
            $model->setBigDescription($data['big_description']);
        } else {
            $model->setBigDescription(null);
        }

        //  Optionnal Field
        if (isset($data['hard_open_hour'])) {
            $model->setHardOpenHour($data['hard_open_hour']);
        } else {
            $model->setHardOpenHour(null);
        }

        if (isset($data['access'])) {
            $model->setAccess($data['access']);
        } else {
            $model->setAccess(null);
        }

        if (isset($data['address2'])) {
            $model->setAddress2($data['address2']);
        } else {
            $model->setAddress2(null);
        }

        if (isset($data['address3'])) {
            $model->setAddress3($data['address3']);
        } else {
            $model->setAddress3(null);
        }

        return $model;
    }
}
