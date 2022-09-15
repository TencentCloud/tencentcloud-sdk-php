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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DestroyEnvironment请求参数结构体
 *
 * @method string getEnvironmentId() 获取命名空间ID
 * @method void setEnvironmentId(string $EnvironmentId) 设置命名空间ID
 * @method integer getSourceChannel() 获取Namespace
 * @method void setSourceChannel(integer $SourceChannel) 设置Namespace
 */
class DestroyEnvironmentRequest extends AbstractModel
{
    /**
     * @var string 命名空间ID
     */
    public $EnvironmentId;

    /**
     * @var integer Namespace
     */
    public $SourceChannel;

    /**
     * @param string $EnvironmentId 命名空间ID
     * @param integer $SourceChannel Namespace
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }
    }
}
