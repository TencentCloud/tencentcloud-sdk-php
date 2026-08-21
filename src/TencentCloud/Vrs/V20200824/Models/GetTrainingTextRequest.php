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
namespace TencentCloud\Vrs\V20200824\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetTrainingText请求参数结构体
 *
 * @method integer getTaskType() 获取<p>复刻类型。<br>5 - 一句话声音复刻。</p>
 * @method void setTaskType(integer $TaskType) 设置<p>复刻类型。<br>5 - 一句话声音复刻。</p>
 * @method integer getDomain() 获取<p>音色场景。（仅支持一句话声音复刻，其余复刻类型不生效）<br>0 - 通用场景（默认）；<br>1 - 聊天场景；<br>2 - 阅读场景；<br>3 - 资讯播报场景。</p>
 * @method void setDomain(integer $Domain) 设置<p>音色场景。（仅支持一句话声音复刻，其余复刻类型不生效）<br>0 - 通用场景（默认）；<br>1 - 聊天场景；<br>2 - 阅读场景；<br>3 - 资讯播报场景。</p>
 * @method integer getTextLanguage() 获取<p>文本语种。（仅支持一句话声音复刻，其余复刻类型不生效）<br>1 - 中文（默认）。</p>
 * @method void setTextLanguage(integer $TextLanguage) 设置<p>文本语种。（仅支持一句话声音复刻，其余复刻类型不生效）<br>1 - 中文（默认）。</p>
 */
class GetTrainingTextRequest extends AbstractModel
{
    /**
     * @var integer <p>复刻类型。<br>5 - 一句话声音复刻。</p>
     */
    public $TaskType;

    /**
     * @var integer <p>音色场景。（仅支持一句话声音复刻，其余复刻类型不生效）<br>0 - 通用场景（默认）；<br>1 - 聊天场景；<br>2 - 阅读场景；<br>3 - 资讯播报场景。</p>
     */
    public $Domain;

    /**
     * @var integer <p>文本语种。（仅支持一句话声音复刻，其余复刻类型不生效）<br>1 - 中文（默认）。</p>
     */
    public $TextLanguage;

    /**
     * @param integer $TaskType <p>复刻类型。<br>5 - 一句话声音复刻。</p>
     * @param integer $Domain <p>音色场景。（仅支持一句话声音复刻，其余复刻类型不生效）<br>0 - 通用场景（默认）；<br>1 - 聊天场景；<br>2 - 阅读场景；<br>3 - 资讯播报场景。</p>
     * @param integer $TextLanguage <p>文本语种。（仅支持一句话声音复刻，其余复刻类型不生效）<br>1 - 中文（默认）。</p>
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("TextLanguage",$param) and $param["TextLanguage"] !== null) {
            $this->TextLanguage = $param["TextLanguage"];
        }
    }
}
