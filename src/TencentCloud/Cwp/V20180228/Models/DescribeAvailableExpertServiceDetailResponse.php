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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAvailableExpertServiceDetail返回参数结构体
 *
 * @method array getExpertService() 获取安全管家订单
 * @method void setExpertService(array $ExpertService) 设置安全管家订单
 * @method integer getEmergencyResponse() 获取应急响应可用次数
 * @method void setEmergencyResponse(integer $EmergencyResponse) 设置应急响应可用次数
 * @method integer getProtectNet() 获取旗舰护网可用次数
 * @method void setProtectNet(integer $ProtectNet) 设置旗舰护网可用次数
 * @method boolean getExpertServiceBuy() 获取是否购买过安全管家
 * @method void setExpertServiceBuy(boolean $ExpertServiceBuy) 设置是否购买过安全管家
 * @method boolean getEmergencyResponseBuy() 获取是否购买过应急响应
 * @method void setEmergencyResponseBuy(boolean $EmergencyResponseBuy) 设置是否购买过应急响应
 * @method boolean getProtectNetBuy() 获取是否购买过旗舰护网
 * @method void setProtectNetBuy(boolean $ProtectNetBuy) 设置是否购买过旗舰护网
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAvailableExpertServiceDetailResponse extends AbstractModel
{
    /**
     * @var array 安全管家订单
     */
    public $ExpertService;

    /**
     * @var integer 应急响应可用次数
     */
    public $EmergencyResponse;

    /**
     * @var integer 旗舰护网可用次数
     */
    public $ProtectNet;

    /**
     * @var boolean 是否购买过安全管家
     */
    public $ExpertServiceBuy;

    /**
     * @var boolean 是否购买过应急响应
     */
    public $EmergencyResponseBuy;

    /**
     * @var boolean 是否购买过旗舰护网
     */
    public $ProtectNetBuy;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $ExpertService 安全管家订单
     * @param integer $EmergencyResponse 应急响应可用次数
     * @param integer $ProtectNet 旗舰护网可用次数
     * @param boolean $ExpertServiceBuy 是否购买过安全管家
     * @param boolean $EmergencyResponseBuy 是否购买过应急响应
     * @param boolean $ProtectNetBuy 是否购买过旗舰护网
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ExpertService",$param) and $param["ExpertService"] !== null) {
            $this->ExpertService = [];
            foreach ($param["ExpertService"] as $key => $value){
                $obj = new ExpertServiceOrderInfo();
                $obj->deserialize($value);
                array_push($this->ExpertService, $obj);
            }
        }

        if (array_key_exists("EmergencyResponse",$param) and $param["EmergencyResponse"] !== null) {
            $this->EmergencyResponse = $param["EmergencyResponse"];
        }

        if (array_key_exists("ProtectNet",$param) and $param["ProtectNet"] !== null) {
            $this->ProtectNet = $param["ProtectNet"];
        }

        if (array_key_exists("ExpertServiceBuy",$param) and $param["ExpertServiceBuy"] !== null) {
            $this->ExpertServiceBuy = $param["ExpertServiceBuy"];
        }

        if (array_key_exists("EmergencyResponseBuy",$param) and $param["EmergencyResponseBuy"] !== null) {
            $this->EmergencyResponseBuy = $param["EmergencyResponseBuy"];
        }

        if (array_key_exists("ProtectNetBuy",$param) and $param["ProtectNetBuy"] !== null) {
            $this->ProtectNetBuy = $param["ProtectNetBuy"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
