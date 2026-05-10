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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能擦除任务
 *
 * @method integer getDefinition() 获取<p>智能擦除模板id。</p>
 * @method void setDefinition(integer $Definition) 设置<p>智能擦除模板id。</p>
 * @method MPSRawSmartEraseParameter getRawParameter() 获取<p>智能擦除自定义参数，当 Definition 填 0 时有效。 该参数用于高度定制场景，建议您优先使用 Definition 指定智能擦除参数。</p>
 * @method void setRawParameter(MPSRawSmartEraseParameter $RawParameter) 设置<p>智能擦除自定义参数，当 Definition 填 0 时有效。 该参数用于高度定制场景，建议您优先使用 Definition 指定智能擦除参数。</p>
 * @method MPSOverrideEraseParameter getOverrideParameter() 获取<p>智能擦除自定义参数，当 Definition 不填 0 时有效。 当填写了该结构中的部分擦除参数时，将使用填写的参数覆盖智能擦除模板中的参数。 该参数用于高度定制场景，建议您仅使用 Definition 指定智能擦除参数。</p>
 * @method void setOverrideParameter(MPSOverrideEraseParameter $OverrideParameter) 设置<p>智能擦除自定义参数，当 Definition 不填 0 时有效。 当填写了该结构中的部分擦除参数时，将使用填写的参数覆盖智能擦除模板中的参数。 该参数用于高度定制场景，建议您仅使用 Definition 指定智能擦除参数。</p>
 */
class MPSSmartEraseTaskInput extends AbstractModel
{
    /**
     * @var integer <p>智能擦除模板id。</p>
     */
    public $Definition;

    /**
     * @var MPSRawSmartEraseParameter <p>智能擦除自定义参数，当 Definition 填 0 时有效。 该参数用于高度定制场景，建议您优先使用 Definition 指定智能擦除参数。</p>
     */
    public $RawParameter;

    /**
     * @var MPSOverrideEraseParameter <p>智能擦除自定义参数，当 Definition 不填 0 时有效。 当填写了该结构中的部分擦除参数时，将使用填写的参数覆盖智能擦除模板中的参数。 该参数用于高度定制场景，建议您仅使用 Definition 指定智能擦除参数。</p>
     */
    public $OverrideParameter;

    /**
     * @param integer $Definition <p>智能擦除模板id。</p>
     * @param MPSRawSmartEraseParameter $RawParameter <p>智能擦除自定义参数，当 Definition 填 0 时有效。 该参数用于高度定制场景，建议您优先使用 Definition 指定智能擦除参数。</p>
     * @param MPSOverrideEraseParameter $OverrideParameter <p>智能擦除自定义参数，当 Definition 不填 0 时有效。 当填写了该结构中的部分擦除参数时，将使用填写的参数覆盖智能擦除模板中的参数。 该参数用于高度定制场景，建议您仅使用 Definition 指定智能擦除参数。</p>
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("RawParameter",$param) and $param["RawParameter"] !== null) {
            $this->RawParameter = new MPSRawSmartEraseParameter();
            $this->RawParameter->deserialize($param["RawParameter"]);
        }

        if (array_key_exists("OverrideParameter",$param) and $param["OverrideParameter"] !== null) {
            $this->OverrideParameter = new MPSOverrideEraseParameter();
            $this->OverrideParameter->deserialize($param["OverrideParameter"]);
        }
    }
}
