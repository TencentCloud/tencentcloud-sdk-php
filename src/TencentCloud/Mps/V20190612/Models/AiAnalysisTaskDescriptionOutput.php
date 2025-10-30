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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能描述结果信息
 *
 * @method array getDescriptionSet() 获取视频智能描述列表。
 * @method void setDescriptionSet(array $DescriptionSet) 设置视频智能描述列表。
 */
class AiAnalysisTaskDescriptionOutput extends AbstractModel
{
    /**
     * @var array 视频智能描述列表。
     */
    public $DescriptionSet;

    /**
     * @param array $DescriptionSet 视频智能描述列表。
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
        if (array_key_exists("DescriptionSet",$param) and $param["DescriptionSet"] !== null) {
            $this->DescriptionSet = [];
            foreach ($param["DescriptionSet"] as $key => $value){
                $obj = new MediaAiAnalysisDescriptionItem();
                $obj->deserialize($value);
                array_push($this->DescriptionSet, $obj);
            }
        }
    }
}
