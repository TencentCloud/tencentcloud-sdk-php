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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音视频审核涉及令人不安全的信息的任务输入参数类型
 *
 * @method integer getDefinition() 获取鉴别涉及令人不安全的信息的模板 ID。
 * @method void setDefinition(integer $Definition) 设置鉴别涉及令人不安全的信息的模板 ID。
 */
class AiReviewTerrorismTaskInput extends AbstractModel
{
    /**
     * @var integer 鉴别涉及令人不安全的信息的模板 ID。
     */
    public $Definition;

    /**
     * @param integer $Definition 鉴别涉及令人不安全的信息的模板 ID。
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
    }
}
