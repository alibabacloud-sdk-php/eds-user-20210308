<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\UpdatePropertyResponseBody;

use AlibabaCloud\SDK\Edsuser\V20210308\Models\UpdatePropertyResponseBody\updateResult\savePropertyValueModel;
use AlibabaCloud\Tea\Model;

class updateResult extends Model
{
    /**
     * @description The ID of the property.
     *
     * @example 390
     *
     * @var int
     */
    public $propertyId;

    /**
     * @description The name of the property.
     *
     * @example testkey2
     *
     * @var string
     */
    public $propertyKey;

    /**
     * @description The result of the property value modification.
     *
     * @var savePropertyValueModel
     */
    public $savePropertyValueModel;
    protected $_name = [
        'propertyId'             => 'PropertyId',
        'propertyKey'            => 'PropertyKey',
        'savePropertyValueModel' => 'SavePropertyValueModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->propertyId) {
            $res['PropertyId'] = $this->propertyId;
        }
        if (null !== $this->propertyKey) {
            $res['PropertyKey'] = $this->propertyKey;
        }
        if (null !== $this->savePropertyValueModel) {
            $res['SavePropertyValueModel'] = null !== $this->savePropertyValueModel ? $this->savePropertyValueModel->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return updateResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PropertyId'])) {
            $model->propertyId = $map['PropertyId'];
        }
        if (isset($map['PropertyKey'])) {
            $model->propertyKey = $map['PropertyKey'];
        }
        if (isset($map['SavePropertyValueModel'])) {
            $model->savePropertyValueModel = savePropertyValueModel::fromMap($map['SavePropertyValueModel']);
        }

        return $model;
    }
}
