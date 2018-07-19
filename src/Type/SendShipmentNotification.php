<?php
/**
 * Collmex SendShipmentNotification Type
 *
 * @author    Marcus Jaschen <mail@marcusjaschen.de>
 * @author    René Galle <renegalle.webdevelopment@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license MIT License
 * @link      https://github.com/mjaschen/collmex
 */

namespace MarcusJaschen\Collmex\Type;

/**
 * Collmex SendShipmentNotification Type
 *
 * @author   Marcus Jaschen <mail@marcusjaschen.de>
 * @author   René Galle <renegalle.webdevelopment@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license MIT License
 * @link     https://github.com/mjaschen/collmex
 *
 * @property $type_identifier
 * @property $delivery_id
 * @property $client_id
 * @property $customer_id
 * @property $mode_of_shipment
 * @property $sent_to_shipment_company
 * @property $tracking_code
 * @property $delivery_date_from
 */
class SendShipmentNotification extends AbstractType implements TypeInterface
{
    /**
     * @var array
     */
    protected $template = [
        'type_identifier'          => 'SHIPMENT_NOTIFICATION_SEND',
        'delivery_id'              => null,
        'client_id'                => null,
        'customer_id'              => null,
        'mode_of_shipment'         => null,
        'sent_to_shipment_company' => null,
        'use_tracking_code'        => null,
        'delivery_date_from'       => null,
    ];

    /**
     * Formally validates the type data in $data attribute.
     *
     * @return bool Validation success
     */
    public function validate()
    {
        return true;
    }
}
