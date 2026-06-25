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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateKey请求参数结构体
 *
 * @method string getModelRouterId() 获取<p>模型路由实例ID</p>
 * @method void setModelRouterId(string $ModelRouterId) 设置<p>模型路由实例ID</p>
 * @method string getKeyName() 获取<p>Key名称</p>
 * @method void setKeyName(string $KeyName) 设置<p>Key名称</p>
 * @method RateLimitConfigForKey getRateLimitConfig() 获取<p>限速配置</p>
 * @method void setRateLimitConfig(RateLimitConfigForKey $RateLimitConfig) 设置<p>限速配置</p>
 * @method string getBudgetId() 获取<p>关联的积分预算ID</p>
 * @method void setBudgetId(string $BudgetId) 设置<p>关联的积分预算ID</p>
 * @method string getUserGroupId() 获取<p>需要关联的用户组ID</p>
 * @method void setUserGroupId(string $UserGroupId) 设置<p>需要关联的用户组ID</p>
 * @method array getTags() 获取<p>标签</p>
 * @method void setTags(array $Tags) 设置<p>标签</p>
 */
class CreateKeyRequest extends AbstractModel
{
    /**
     * @var string <p>模型路由实例ID</p>
     */
    public $ModelRouterId;

    /**
     * @var string <p>Key名称</p>
     */
    public $KeyName;

    /**
     * @var RateLimitConfigForKey <p>限速配置</p>
     */
    public $RateLimitConfig;

    /**
     * @var string <p>关联的积分预算ID</p>
     */
    public $BudgetId;

    /**
     * @var string <p>需要关联的用户组ID</p>
     */
    public $UserGroupId;

    /**
     * @var array <p>标签</p>
     */
    public $Tags;

    /**
     * @param string $ModelRouterId <p>模型路由实例ID</p>
     * @param string $KeyName <p>Key名称</p>
     * @param RateLimitConfigForKey $RateLimitConfig <p>限速配置</p>
     * @param string $BudgetId <p>关联的积分预算ID</p>
     * @param string $UserGroupId <p>需要关联的用户组ID</p>
     * @param array $Tags <p>标签</p>
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
        if (array_key_exists("ModelRouterId",$param) and $param["ModelRouterId"] !== null) {
            $this->ModelRouterId = $param["ModelRouterId"];
        }

        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            $this->KeyName = $param["KeyName"];
        }

        if (array_key_exists("RateLimitConfig",$param) and $param["RateLimitConfig"] !== null) {
            $this->RateLimitConfig = new RateLimitConfigForKey();
            $this->RateLimitConfig->deserialize($param["RateLimitConfig"]);
        }

        if (array_key_exists("BudgetId",$param) and $param["BudgetId"] !== null) {
            $this->BudgetId = $param["BudgetId"];
        }

        if (array_key_exists("UserGroupId",$param) and $param["UserGroupId"] !== null) {
            $this->UserGroupId = $param["UserGroupId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
