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
 * CreateKeys请求参数结构体
 *
 * @method string getModelRouterId() 获取<p>模型路由ID</p>
 * @method void setModelRouterId(string $ModelRouterId) 设置<p>模型路由ID</p>
 * @method string getBudgetId() 获取<p>需要绑定的预算信息，所有Key共用</p>
 * @method void setBudgetId(string $BudgetId) 设置<p>需要绑定的预算信息，所有Key共用</p>
 * @method array getKeys() 获取<p>Key列表</p>
 * @method void setKeys(array $Keys) 设置<p>Key列表</p>
 * @method string getMode() 获取<p>批量创建Key的模式</p><p>枚举值：</p><ul><li>Generate： 平台生成Key</li><li>Import： 导入自带Key</li></ul><p>默认值：Generate</p>
 * @method void setMode(string $Mode) 设置<p>批量创建Key的模式</p><p>枚举值：</p><ul><li>Generate： 平台生成Key</li><li>Import： 导入自带Key</li></ul><p>默认值：Generate</p>
 * @method RateLimitConfigForKey getRateLimitConfig() 获取<p>限速信息，所有Key共用</p>
 * @method void setRateLimitConfig(RateLimitConfigForKey $RateLimitConfig) 设置<p>限速信息，所有Key共用</p>
 * @method array getTags() 获取<p>标签。所有Key都会绑定该标签。</p>
 * @method void setTags(array $Tags) 设置<p>标签。所有Key都会绑定该标签。</p>
 * @method string getUserGroupId() 获取<p>需要关联的用户组ID</p>
 * @method void setUserGroupId(string $UserGroupId) 设置<p>需要关联的用户组ID</p>
 */
class CreateKeysRequest extends AbstractModel
{
    /**
     * @var string <p>模型路由ID</p>
     */
    public $ModelRouterId;

    /**
     * @var string <p>需要绑定的预算信息，所有Key共用</p>
     */
    public $BudgetId;

    /**
     * @var array <p>Key列表</p>
     */
    public $Keys;

    /**
     * @var string <p>批量创建Key的模式</p><p>枚举值：</p><ul><li>Generate： 平台生成Key</li><li>Import： 导入自带Key</li></ul><p>默认值：Generate</p>
     */
    public $Mode;

    /**
     * @var RateLimitConfigForKey <p>限速信息，所有Key共用</p>
     */
    public $RateLimitConfig;

    /**
     * @var array <p>标签。所有Key都会绑定该标签。</p>
     */
    public $Tags;

    /**
     * @var string <p>需要关联的用户组ID</p>
     */
    public $UserGroupId;

    /**
     * @param string $ModelRouterId <p>模型路由ID</p>
     * @param string $BudgetId <p>需要绑定的预算信息，所有Key共用</p>
     * @param array $Keys <p>Key列表</p>
     * @param string $Mode <p>批量创建Key的模式</p><p>枚举值：</p><ul><li>Generate： 平台生成Key</li><li>Import： 导入自带Key</li></ul><p>默认值：Generate</p>
     * @param RateLimitConfigForKey $RateLimitConfig <p>限速信息，所有Key共用</p>
     * @param array $Tags <p>标签。所有Key都会绑定该标签。</p>
     * @param string $UserGroupId <p>需要关联的用户组ID</p>
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

        if (array_key_exists("BudgetId",$param) and $param["BudgetId"] !== null) {
            $this->BudgetId = $param["BudgetId"];
        }

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = [];
            foreach ($param["Keys"] as $key => $value){
                $obj = new InputKeyInfo();
                $obj->deserialize($value);
                array_push($this->Keys, $obj);
            }
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("RateLimitConfig",$param) and $param["RateLimitConfig"] !== null) {
            $this->RateLimitConfig = new RateLimitConfigForKey();
            $this->RateLimitConfig->deserialize($param["RateLimitConfig"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("UserGroupId",$param) and $param["UserGroupId"] !== null) {
            $this->UserGroupId = $param["UserGroupId"];
        }
    }
}
