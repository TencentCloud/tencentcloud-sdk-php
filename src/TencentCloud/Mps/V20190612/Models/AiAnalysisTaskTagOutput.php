<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
 * 智能标签结果信息
 *
 * @method array getTagSet() 获取视频智能标签列表。
 * @method void setTagSet(array $TagSet) 设置视频智能标签列表。
 */
class AiAnalysisTaskTagOutput extends AbstractModel
{
    /**
     * @var array 视频智能标签列表。
     */
    public $TagSet;

    /**
     * @param array $TagSet 视频智能标签列表。
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
        if (array_key_exists('TagSet',$param) and $param['TagSet'] !== null) {
            $this->TagSet = [];
            foreach ($param['TagSet'] as $key => $value){
                $obj = new MediaAiAnalysisTagItem();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }
    }
}
