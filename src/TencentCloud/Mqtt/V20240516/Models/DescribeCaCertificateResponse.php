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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCaCertificate返回参数结构体
 *
 * @method integer getCreatedTime() 获取创建时间，毫秒级时间戳 。
 * @method void setCreatedTime(integer $CreatedTime) 设置创建时间，毫秒级时间戳 。
 * @method integer getUpdateTime() 获取上次更新时间，毫秒级时间戳 。
 * @method void setUpdateTime(integer $UpdateTime) 设置上次更新时间，毫秒级时间戳 。
 * @method integer getNotAfterTime() 获取失效日期，毫秒级时间戳 。
 * @method void setNotAfterTime(integer $NotAfterTime) 设置失效日期，毫秒级时间戳 。
 * @method integer getLastActivationTime() 获取上次激活时间，毫秒级时间戳 。
 * @method void setLastActivationTime(integer $LastActivationTime) 设置上次激活时间，毫秒级时间戳 。
 * @method integer getLastInactivationTime() 获取上次吊销时间，毫秒级时间戳 。
 * @method void setLastInactivationTime(integer $LastInactivationTime) 设置上次吊销时间，毫秒级时间戳 。
 * @method string getStatus() 获取CA证书状态
 ACTIVE：激活
INACTIVE：未激活

 * @method void setStatus(string $Status) 设置CA证书状态
 ACTIVE：激活
INACTIVE：未激活

 * @method string getCaSn() 获取证书序列号
 * @method void setCaSn(string $CaSn) 设置证书序列号
 * @method string getCaCn() 获取证书的CN（Common Name），证书中用于标识主体的名称，通常是域名或组织名称
 * @method void setCaCn(string $CaCn) 设置证书的CN（Common Name），证书中用于标识主体的名称，通常是域名或组织名称
 * @method string getCaCertificate() 获取证书内容
 * @method void setCaCertificate(string $CaCertificate) 设置证书内容
 * @method string getFormat() 获取证书格式，当仅支持PEM格式
 * @method void setFormat(string $Format) 设置证书格式，当仅支持PEM格式
 * @method string getCaIssuerCn() 获取Ca证书颁发者CN
 * @method void setCaIssuerCn(string $CaIssuerCn) 设置Ca证书颁发者CN
 * @method integer getNotBeforeTime() 获取生效开始时间，毫秒级时间戳 。
 * @method void setNotBeforeTime(integer $NotBeforeTime) 设置生效开始时间，毫秒级时间戳 。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCaCertificateResponse extends AbstractModel
{
    /**
     * @var integer 创建时间，毫秒级时间戳 。
     */
    public $CreatedTime;

    /**
     * @var integer 上次更新时间，毫秒级时间戳 。
     */
    public $UpdateTime;

    /**
     * @var integer 失效日期，毫秒级时间戳 。
     */
    public $NotAfterTime;

    /**
     * @var integer 上次激活时间，毫秒级时间戳 。
     */
    public $LastActivationTime;

    /**
     * @var integer 上次吊销时间，毫秒级时间戳 。
     */
    public $LastInactivationTime;

    /**
     * @var string CA证书状态
 ACTIVE：激活
INACTIVE：未激活

     */
    public $Status;

    /**
     * @var string 证书序列号
     */
    public $CaSn;

    /**
     * @var string 证书的CN（Common Name），证书中用于标识主体的名称，通常是域名或组织名称
     */
    public $CaCn;

    /**
     * @var string 证书内容
     */
    public $CaCertificate;

    /**
     * @var string 证书格式，当仅支持PEM格式
     */
    public $Format;

    /**
     * @var string Ca证书颁发者CN
     */
    public $CaIssuerCn;

    /**
     * @var integer 生效开始时间，毫秒级时间戳 。
     */
    public $NotBeforeTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $CreatedTime 创建时间，毫秒级时间戳 。
     * @param integer $UpdateTime 上次更新时间，毫秒级时间戳 。
     * @param integer $NotAfterTime 失效日期，毫秒级时间戳 。
     * @param integer $LastActivationTime 上次激活时间，毫秒级时间戳 。
     * @param integer $LastInactivationTime 上次吊销时间，毫秒级时间戳 。
     * @param string $Status CA证书状态
 ACTIVE：激活
INACTIVE：未激活

     * @param string $CaSn 证书序列号
     * @param string $CaCn 证书的CN（Common Name），证书中用于标识主体的名称，通常是域名或组织名称
     * @param string $CaCertificate 证书内容
     * @param string $Format 证书格式，当仅支持PEM格式
     * @param string $CaIssuerCn Ca证书颁发者CN
     * @param integer $NotBeforeTime 生效开始时间，毫秒级时间戳 。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("NotAfterTime",$param) and $param["NotAfterTime"] !== null) {
            $this->NotAfterTime = $param["NotAfterTime"];
        }

        if (array_key_exists("LastActivationTime",$param) and $param["LastActivationTime"] !== null) {
            $this->LastActivationTime = $param["LastActivationTime"];
        }

        if (array_key_exists("LastInactivationTime",$param) and $param["LastInactivationTime"] !== null) {
            $this->LastInactivationTime = $param["LastInactivationTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CaSn",$param) and $param["CaSn"] !== null) {
            $this->CaSn = $param["CaSn"];
        }

        if (array_key_exists("CaCn",$param) and $param["CaCn"] !== null) {
            $this->CaCn = $param["CaCn"];
        }

        if (array_key_exists("CaCertificate",$param) and $param["CaCertificate"] !== null) {
            $this->CaCertificate = $param["CaCertificate"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("CaIssuerCn",$param) and $param["CaIssuerCn"] !== null) {
            $this->CaIssuerCn = $param["CaIssuerCn"];
        }

        if (array_key_exists("NotBeforeTime",$param) and $param["NotBeforeTime"] !== null) {
            $this->NotBeforeTime = $param["NotBeforeTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
