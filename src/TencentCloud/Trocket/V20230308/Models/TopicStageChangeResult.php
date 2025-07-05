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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 迁移主题修改状态后的结果
 *
 * @method string getTopicName() 获取主题名称
 * @method void setTopicName(string $TopicName) 设置主题名称
 * @method boolean getSuccess() 获取是否成功
 * @method void setSuccess(boolean $Success) 设置是否成功
 * @method string getNamespace() 获取命名空间，仅4.x有效
 * @method void setNamespace(string $Namespace) 设置命名空间，仅4.x有效
 */
class TopicStageChangeResult extends AbstractModel
{
    /**
     * @var string 主题名称
     */
    public $TopicName;

    /**
     * @var boolean 是否成功
     */
    public $Success;

    /**
     * @var string 命名空间，仅4.x有效
     */
    public $Namespace;

    /**
     * @param string $TopicName 主题名称
     * @param boolean $Success 是否成功
     * @param string $Namespace 命名空间，仅4.x有效
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Success",$param) and $param["Success"] !== null) {
            $this->Success = $param["Success"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}
