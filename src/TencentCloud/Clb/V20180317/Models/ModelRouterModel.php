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
 * 模型路由关联的模型
 *
 * @method string getModelName() 获取<p>模型名称</p>
 * @method void setModelName(string $ModelName) 设置<p>模型名称</p>
 * @method string getProvider() 获取<p>所属厂商</p>
 * @method void setProvider(string $Provider) 设置<p>所属厂商</p>
 * @method string getType() 获取<p>模型类型。</p><p>枚举值：</p><ul><li>BYOK： BYOK类型</li><li>Platform： 平台类型</li></ul>
 * @method void setType(string $Type) 设置<p>模型类型。</p><p>枚举值：</p><ul><li>BYOK： BYOK类型</li><li>Platform： 平台类型</li></ul>
 * @method string getServiceProviderId() 获取<p>服务商/模型 ID（byok_model.model_id，形如 model-xxxxxxxx；Platform 类型不传）</p>
 * @method void setServiceProviderId(string $ServiceProviderId) 设置<p>服务商/模型 ID（byok_model.model_id，形如 model-xxxxxxxx；Platform 类型不传）</p>
 */
class ModelRouterModel extends AbstractModel
{
    /**
     * @var string <p>模型名称</p>
     */
    public $ModelName;

    /**
     * @var string <p>所属厂商</p>
     */
    public $Provider;

    /**
     * @var string <p>模型类型。</p><p>枚举值：</p><ul><li>BYOK： BYOK类型</li><li>Platform： 平台类型</li></ul>
     */
    public $Type;

    /**
     * @var string <p>服务商/模型 ID（byok_model.model_id，形如 model-xxxxxxxx；Platform 类型不传）</p>
     */
    public $ServiceProviderId;

    /**
     * @param string $ModelName <p>模型名称</p>
     * @param string $Provider <p>所属厂商</p>
     * @param string $Type <p>模型类型。</p><p>枚举值：</p><ul><li>BYOK： BYOK类型</li><li>Platform： 平台类型</li></ul>
     * @param string $ServiceProviderId <p>服务商/模型 ID（byok_model.model_id，形如 model-xxxxxxxx；Platform 类型不传）</p>
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
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ServiceProviderId",$param) and $param["ServiceProviderId"] !== null) {
            $this->ServiceProviderId = $param["ServiceProviderId"];
        }
    }
}
