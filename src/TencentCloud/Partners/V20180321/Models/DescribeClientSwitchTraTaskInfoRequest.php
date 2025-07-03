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
namespace TencentCloud\Partners\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClientSwitchTraTaskInfo请求参数结构体
 *
 * @method string getClientUin() 获取代客UIN
 * @method void setClientUin(string $ClientUin) 设置代客UIN
 * @method integer getSwitchType() 获取1：代理，2：代采
 * @method void setSwitchType(integer $SwitchType) 设置1：代理，2：代采
 */
class DescribeClientSwitchTraTaskInfoRequest extends AbstractModel
{
    /**
     * @var string 代客UIN
     */
    public $ClientUin;

    /**
     * @var integer 1：代理，2：代采
     */
    public $SwitchType;

    /**
     * @param string $ClientUin 代客UIN
     * @param integer $SwitchType 1：代理，2：代采
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
        if (array_key_exists("ClientUin",$param) and $param["ClientUin"] !== null) {
            $this->ClientUin = $param["ClientUin"];
        }

        if (array_key_exists("SwitchType",$param) and $param["SwitchType"] !== null) {
            $this->SwitchType = $param["SwitchType"];
        }
    }
}
