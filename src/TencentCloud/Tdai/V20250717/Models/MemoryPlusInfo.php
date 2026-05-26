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
 * Memory正式版实例列表元素信息
 *
 * @method string getSpaceId() 获取<p>实例id</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>实例id</p>
 * @method string getName() 获取<p>实例名称</p>
 * @method void setName(string $Name) 设置<p>实例名称</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method integer getStatus() 获取<p>实例状态</p>
 * @method void setStatus(integer $Status) 设置<p>实例状态</p>
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method integer getMemoryUsage() 获取<p>记忆条数</p>
 * @method void setMemoryUsage(integer $MemoryUsage) 设置<p>记忆条数</p>
 * @method float getCreditUsage() 获取<p>当月积分数</p>
 * @method void setCreditUsage(float $CreditUsage) 设置<p>当月积分数</p>
 * @method array getResourceTags() 获取<p>资源标签</p>
 * @method void setResourceTags(array $ResourceTags) 设置<p>资源标签</p>
 * @method string getCreatedAt() 获取<p>创建时间</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>创建时间</p>
 * @method string getIsolatedAt() 获取<p>隔离时间</p>
 * @method void setIsolatedAt(string $IsolatedAt) 设置<p>隔离时间</p>
 * @method string getExpiredAt() 获取<p>到期时间</p>
 * @method void setExpiredAt(string $ExpiredAt) 设置<p>到期时间</p>
 * @method string getDestroyAt() 获取<p>到期销毁时间</p>
 * @method void setDestroyAt(string $DestroyAt) 设置<p>到期销毁时间</p>
 */
class MemoryPlusInfo extends AbstractModel
{
    /**
     * @var string <p>实例id</p>
     */
    public $SpaceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $Name;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var integer <p>实例状态</p>
     */
    public $Status;

    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var integer <p>记忆条数</p>
     */
    public $MemoryUsage;

    /**
     * @var float <p>当月积分数</p>
     */
    public $CreditUsage;

    /**
     * @var array <p>资源标签</p>
     */
    public $ResourceTags;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>隔离时间</p>
     */
    public $IsolatedAt;

    /**
     * @var string <p>到期时间</p>
     */
    public $ExpiredAt;

    /**
     * @var string <p>到期销毁时间</p>
     */
    public $DestroyAt;

    /**
     * @param string $SpaceId <p>实例id</p>
     * @param string $Name <p>实例名称</p>
     * @param string $Description <p>描述</p>
     * @param integer $Status <p>实例状态</p>
     * @param string $Region <p>地域</p>
     * @param integer $MemoryUsage <p>记忆条数</p>
     * @param float $CreditUsage <p>当月积分数</p>
     * @param array $ResourceTags <p>资源标签</p>
     * @param string $CreatedAt <p>创建时间</p>
     * @param string $IsolatedAt <p>隔离时间</p>
     * @param string $ExpiredAt <p>到期时间</p>
     * @param string $DestroyAt <p>到期销毁时间</p>
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("MemoryUsage",$param) and $param["MemoryUsage"] !== null) {
            $this->MemoryUsage = $param["MemoryUsage"];
        }

        if (array_key_exists("CreditUsage",$param) and $param["CreditUsage"] !== null) {
            $this->CreditUsage = $param["CreditUsage"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("IsolatedAt",$param) and $param["IsolatedAt"] !== null) {
            $this->IsolatedAt = $param["IsolatedAt"];
        }

        if (array_key_exists("ExpiredAt",$param) and $param["ExpiredAt"] !== null) {
            $this->ExpiredAt = $param["ExpiredAt"];
        }

        if (array_key_exists("DestroyAt",$param) and $param["DestroyAt"] !== null) {
            $this->DestroyAt = $param["DestroyAt"];
        }
    }
}
