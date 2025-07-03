<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机位状态及对应的数量
 *
 * @method integer getPositionStatus() 获取状态值
 * @method void setPositionStatus(integer $PositionStatus) 设置状态值
 * @method integer getCount() 获取对应的机位数量
 * @method void setCount(integer $Count) 设置对应的机位数量
 */
class PositionStatusItem extends AbstractModel
{
    /**
     * @var integer 状态值
     */
    public $PositionStatus;

    /**
     * @var integer 对应的机位数量
     */
    public $Count;

    /**
     * @param integer $PositionStatus 状态值
     * @param integer $Count 对应的机位数量
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PositionStatus",$param) and $param["PositionStatus"] !== null) {
            $this->PositionStatus = $param["PositionStatus"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
