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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteAgentApplication请求参数结构体
 *
 * @method string getApplicationId() 获取<p>应用id</p>
 * @method void setApplicationId(string $ApplicationId) 设置<p>应用id</p>
 * @method boolean getDeleteTopics() 获取<p>是否删除agent应用关联的主题</p><p>枚举值：</p><ul><li>false： 不删除agent应用关联的主题</li><li>true： 删除agent应用关联的主题</li></ul><p>默认值：false</p>
 * @method void setDeleteTopics(boolean $DeleteTopics) 设置<p>是否删除agent应用关联的主题</p><p>枚举值：</p><ul><li>false： 不删除agent应用关联的主题</li><li>true： 删除agent应用关联的主题</li></ul><p>默认值：false</p>
 */
class DeleteAgentApplicationRequest extends AbstractModel
{
    /**
     * @var string <p>应用id</p>
     */
    public $ApplicationId;

    /**
     * @var boolean <p>是否删除agent应用关联的主题</p><p>枚举值：</p><ul><li>false： 不删除agent应用关联的主题</li><li>true： 删除agent应用关联的主题</li></ul><p>默认值：false</p>
     */
    public $DeleteTopics;

    /**
     * @param string $ApplicationId <p>应用id</p>
     * @param boolean $DeleteTopics <p>是否删除agent应用关联的主题</p><p>枚举值：</p><ul><li>false： 不删除agent应用关联的主题</li><li>true： 删除agent应用关联的主题</li></ul><p>默认值：false</p>
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("DeleteTopics",$param) and $param["DeleteTopics"] !== null) {
            $this->DeleteTopics = $param["DeleteTopics"];
        }
    }
}
