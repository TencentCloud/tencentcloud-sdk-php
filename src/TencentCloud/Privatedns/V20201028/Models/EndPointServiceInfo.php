<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 终端节点信息
 *
 * @method string getEndPointVip() 获取ip
 * @method void setEndPointVip(string $EndPointVip) 设置ip
 * @method string getUniqSubnetId() 获取子网id
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置子网id
 * @method integer getEndPointState() 获取网络侧状态，0 可用，1 待接受，3 拒绝
 * @method void setEndPointState(integer $EndPointState) 设置网络侧状态，0 可用，1 待接受，3 拒绝
 * @method integer getEndPointStatus() 获取状态，1表示可用，0表示删除
 * @method void setEndPointStatus(integer $EndPointStatus) 设置状态，1表示可用，0表示删除
 * @method string getEndPointRemark() 获取备注信息
 * @method void setEndPointRemark(string $EndPointRemark) 设置备注信息
 * @method integer getEndPointIsolateFlag() 获取网络侧隔离状态，1：已隔离，0：未隔离
 * @method void setEndPointIsolateFlag(integer $EndPointIsolateFlag) 设置网络侧隔离状态，1：已隔离，0：未隔离
 */
class EndPointServiceInfo extends AbstractModel
{
    /**
     * @var string ip
     */
    public $EndPointVip;

    /**
     * @var string 子网id
     */
    public $UniqSubnetId;

    /**
     * @var integer 网络侧状态，0 可用，1 待接受，3 拒绝
     */
    public $EndPointState;

    /**
     * @var integer 状态，1表示可用，0表示删除
     */
    public $EndPointStatus;

    /**
     * @var string 备注信息
     */
    public $EndPointRemark;

    /**
     * @var integer 网络侧隔离状态，1：已隔离，0：未隔离
     */
    public $EndPointIsolateFlag;

    /**
     * @param string $EndPointVip ip
     * @param string $UniqSubnetId 子网id
     * @param integer $EndPointState 网络侧状态，0 可用，1 待接受，3 拒绝
     * @param integer $EndPointStatus 状态，1表示可用，0表示删除
     * @param string $EndPointRemark 备注信息
     * @param integer $EndPointIsolateFlag 网络侧隔离状态，1：已隔离，0：未隔离
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
        if (array_key_exists("EndPointVip",$param) and $param["EndPointVip"] !== null) {
            $this->EndPointVip = $param["EndPointVip"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("EndPointState",$param) and $param["EndPointState"] !== null) {
            $this->EndPointState = $param["EndPointState"];
        }

        if (array_key_exists("EndPointStatus",$param) and $param["EndPointStatus"] !== null) {
            $this->EndPointStatus = $param["EndPointStatus"];
        }

        if (array_key_exists("EndPointRemark",$param) and $param["EndPointRemark"] !== null) {
            $this->EndPointRemark = $param["EndPointRemark"];
        }

        if (array_key_exists("EndPointIsolateFlag",$param) and $param["EndPointIsolateFlag"] !== null) {
            $this->EndPointIsolateFlag = $param["EndPointIsolateFlag"];
        }
    }
}
