<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateUsersResponseBody\createResult;

use AlibabaCloud\Dara\Model;

class createdUsers extends Model
{
    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $realNickName;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'email' => 'Email',
        'endUserId' => 'EndUserId',
        'phone' => 'Phone',
        'realNickName' => 'RealNickName',
        'remark' => 'Remark',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        if (null !== $this->realNickName) {
            $res['RealNickName'] = $this->realNickName;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        if (isset($map['RealNickName'])) {
            $model->realNickName = $map['RealNickName'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
