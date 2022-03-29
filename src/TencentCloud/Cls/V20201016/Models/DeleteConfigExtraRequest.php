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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteConfigExtra请求参数结构体
 *
 * @method string getConfigExtraId() 获取采集规则扩展配置ID
 * @method void setConfigExtraId(string $ConfigExtraId) 设置采集规则扩展配置ID
 */
class DeleteConfigExtraRequest extends AbstractModel
{
    /**
     * @var string 采集规则扩展配置ID
     */
    public $ConfigExtraId;

    /**
     * @param string $ConfigExtraId 采集规则扩展配置ID
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
        if (array_key_exists("ConfigExtraId",$param) and $param["ConfigExtraId"] !== null) {
            $this->ConfigExtraId = $param["ConfigExtraId"];
        }
    }
}
