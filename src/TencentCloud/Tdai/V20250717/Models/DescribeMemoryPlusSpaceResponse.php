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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMemoryPlusSpace返回参数结构体
 *
 * @method string getSpaceId() 获取<p>Memory 实例 ID。</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>Memory 实例 ID。</p>
 * @method string getName() 获取<p>Memory 实例的自定义名称。</p>
 * @method void setName(string $Name) 设置<p>Memory 实例的自定义名称。</p>
 * @method string getDescription() 获取<p>Memory 实例的简要描述，包括使用场景、用途或背景信息，便于日常运维识别。</p>
 * @method void setDescription(string $Description) 设置<p>Memory 实例的简要描述，包括使用场景、用途或背景信息，便于日常运维识别。</p>
 * @method integer getAppId() 获取<p>腾讯云账号的 APPID。</p>
 * @method void setAppId(integer $AppId) 设置<p>腾讯云账号的 APPID。</p>
 * @method string getRegion() 获取<p>Memroy 实例所属地域。</p>
 * @method void setRegion(string $Region) 设置<p>Memroy 实例所属地域。</p>
 * @method array getResourceTags() 获取<p>Memory 实例的标签信息。</p>
 * @method void setResourceTags(array $ResourceTags) 设置<p>Memory 实例的标签信息。</p>
 * @method integer getStatus() 获取<p>Memory 实例当前运行状态。</p><ul><li>1：运行中。</li><li>2：创建中。</li><li>3：销毁中。</li><li>4：已销毁。</li><li>5：隔离中。</li><li>6：已隔离。</li><li>7：恢复中。</li></ul>
 * @method void setStatus(integer $Status) 设置<p>Memory 实例当前运行状态。</p><ul><li>1：运行中。</li><li>2：创建中。</li><li>3：销毁中。</li><li>4：已销毁。</li><li>5：隔离中。</li><li>6：已隔离。</li><li>7：恢复中。</li></ul>
 * @method integer getPayMode() 获取<p>Memory 实例计费模式。</p><ul><li>-1：免费体验。</li><li>0：包年包月。</li><li>1：按量计费。</li></ul>
 * @method void setPayMode(integer $PayMode) 设置<p>Memory 实例计费模式。</p><ul><li>-1：免费体验。</li><li>0：包年包月。</li><li>1：按量计费。</li></ul>
 * @method string getVersion() 获取<p>Memory 版本信息：v1。</p>
 * @method void setVersion(string $Version) 设置<p>Memory 版本信息：v1。</p>
 * @method integer getMemoryUsage() 获取<p>Memory 当前已写入的记忆条数。</p>
 * @method void setMemoryUsage(integer $MemoryUsage) 设置<p>Memory 当前已写入的记忆条数。</p>
 * @method integer getMemoryLimit() 获取<p>Memory 实例记忆条数配额上限。</p>
 * @method void setMemoryLimit(integer $MemoryLimit) 设置<p>Memory 实例记忆条数配额上限。</p>
 * @method float getCreditUsage() 获取<p>Memory 实例当前 Credit 的使用数量。</p>
 * @method void setCreditUsage(float $CreditUsage) 设置<p>Memory 实例当前 Credit 的使用数量。</p>
 * @method float getCreditLimit() 获取<p>Memory 实例 Credit 的最大使用数量。</p>
 * @method void setCreditLimit(float $CreditLimit) 设置<p>Memory 实例 Credit 的最大使用数量。</p>
 * @method string getAccessUrl() 获取<p>Memory 实例的内网访问地址。</p>
 * @method void setAccessUrl(string $AccessUrl) 设置<p>Memory 实例的内网访问地址。</p>
 * @method string getWanAccessUrl() 获取<p>Memory 实例的外网访问地址。</p>
 * @method void setWanAccessUrl(string $WanAccessUrl) 设置<p>Memory 实例的外网访问地址。</p>
 * @method string getCreatedAt() 获取<p>Memory 实例的创建时间。</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>Memory 实例的创建时间。</p>
 * @method string getExpiredAt() 获取<p>Memory 实例的到期时间。</p>
 * @method void setExpiredAt(string $ExpiredAt) 设置<p>Memory 实例的到期时间。</p>
 * @method string getIsolatedAt() 获取<p>Memory 实例的隔离时间。</p>
 * @method void setIsolatedAt(string $IsolatedAt) 设置<p>Memory 实例的隔离时间。</p>
 * @method string getDestroyAt() 获取<p>到期销毁时间</p>
 * @method void setDestroyAt(string $DestroyAt) 设置<p>到期销毁时间</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMemoryPlusSpaceResponse extends AbstractModel
{
    /**
     * @var string <p>Memory 实例 ID。</p>
     */
    public $SpaceId;

    /**
     * @var string <p>Memory 实例的自定义名称。</p>
     */
    public $Name;

    /**
     * @var string <p>Memory 实例的简要描述，包括使用场景、用途或背景信息，便于日常运维识别。</p>
     */
    public $Description;

    /**
     * @var integer <p>腾讯云账号的 APPID。</p>
     */
    public $AppId;

    /**
     * @var string <p>Memroy 实例所属地域。</p>
     */
    public $Region;

    /**
     * @var array <p>Memory 实例的标签信息。</p>
     */
    public $ResourceTags;

    /**
     * @var integer <p>Memory 实例当前运行状态。</p><ul><li>1：运行中。</li><li>2：创建中。</li><li>3：销毁中。</li><li>4：已销毁。</li><li>5：隔离中。</li><li>6：已隔离。</li><li>7：恢复中。</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>Memory 实例计费模式。</p><ul><li>-1：免费体验。</li><li>0：包年包月。</li><li>1：按量计费。</li></ul>
     */
    public $PayMode;

    /**
     * @var string <p>Memory 版本信息：v1。</p>
     */
    public $Version;

    /**
     * @var integer <p>Memory 当前已写入的记忆条数。</p>
     */
    public $MemoryUsage;

    /**
     * @var integer <p>Memory 实例记忆条数配额上限。</p>
     */
    public $MemoryLimit;

    /**
     * @var float <p>Memory 实例当前 Credit 的使用数量。</p>
     */
    public $CreditUsage;

    /**
     * @var float <p>Memory 实例 Credit 的最大使用数量。</p>
     */
    public $CreditLimit;

    /**
     * @var string <p>Memory 实例的内网访问地址。</p>
     */
    public $AccessUrl;

    /**
     * @var string <p>Memory 实例的外网访问地址。</p>
     */
    public $WanAccessUrl;

    /**
     * @var string <p>Memory 实例的创建时间。</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>Memory 实例的到期时间。</p>
     */
    public $ExpiredAt;

    /**
     * @var string <p>Memory 实例的隔离时间。</p>
     */
    public $IsolatedAt;

    /**
     * @var string <p>到期销毁时间</p>
     */
    public $DestroyAt;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SpaceId <p>Memory 实例 ID。</p>
     * @param string $Name <p>Memory 实例的自定义名称。</p>
     * @param string $Description <p>Memory 实例的简要描述，包括使用场景、用途或背景信息，便于日常运维识别。</p>
     * @param integer $AppId <p>腾讯云账号的 APPID。</p>
     * @param string $Region <p>Memroy 实例所属地域。</p>
     * @param array $ResourceTags <p>Memory 实例的标签信息。</p>
     * @param integer $Status <p>Memory 实例当前运行状态。</p><ul><li>1：运行中。</li><li>2：创建中。</li><li>3：销毁中。</li><li>4：已销毁。</li><li>5：隔离中。</li><li>6：已隔离。</li><li>7：恢复中。</li></ul>
     * @param integer $PayMode <p>Memory 实例计费模式。</p><ul><li>-1：免费体验。</li><li>0：包年包月。</li><li>1：按量计费。</li></ul>
     * @param string $Version <p>Memory 版本信息：v1。</p>
     * @param integer $MemoryUsage <p>Memory 当前已写入的记忆条数。</p>
     * @param integer $MemoryLimit <p>Memory 实例记忆条数配额上限。</p>
     * @param float $CreditUsage <p>Memory 实例当前 Credit 的使用数量。</p>
     * @param float $CreditLimit <p>Memory 实例 Credit 的最大使用数量。</p>
     * @param string $AccessUrl <p>Memory 实例的内网访问地址。</p>
     * @param string $WanAccessUrl <p>Memory 实例的外网访问地址。</p>
     * @param string $CreatedAt <p>Memory 实例的创建时间。</p>
     * @param string $ExpiredAt <p>Memory 实例的到期时间。</p>
     * @param string $IsolatedAt <p>Memory 实例的隔离时间。</p>
     * @param string $DestroyAt <p>到期销毁时间</p>
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("MemoryUsage",$param) and $param["MemoryUsage"] !== null) {
            $this->MemoryUsage = $param["MemoryUsage"];
        }

        if (array_key_exists("MemoryLimit",$param) and $param["MemoryLimit"] !== null) {
            $this->MemoryLimit = $param["MemoryLimit"];
        }

        if (array_key_exists("CreditUsage",$param) and $param["CreditUsage"] !== null) {
            $this->CreditUsage = $param["CreditUsage"];
        }

        if (array_key_exists("CreditLimit",$param) and $param["CreditLimit"] !== null) {
            $this->CreditLimit = $param["CreditLimit"];
        }

        if (array_key_exists("AccessUrl",$param) and $param["AccessUrl"] !== null) {
            $this->AccessUrl = $param["AccessUrl"];
        }

        if (array_key_exists("WanAccessUrl",$param) and $param["WanAccessUrl"] !== null) {
            $this->WanAccessUrl = $param["WanAccessUrl"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("ExpiredAt",$param) and $param["ExpiredAt"] !== null) {
            $this->ExpiredAt = $param["ExpiredAt"];
        }

        if (array_key_exists("IsolatedAt",$param) and $param["IsolatedAt"] !== null) {
            $this->IsolatedAt = $param["IsolatedAt"];
        }

        if (array_key_exists("DestroyAt",$param) and $param["DestroyAt"] !== null) {
            $this->DestroyAt = $param["DestroyAt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
