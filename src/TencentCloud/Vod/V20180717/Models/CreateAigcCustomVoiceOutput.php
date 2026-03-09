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
 * 创建自定义音色回调输出信息。
 *
 * @method array getInfoList() 获取<p>自定义音色列表。</p>
 * @method void setInfoList(array $InfoList) 设置<p>自定义音色列表。</p>
 */
class CreateAigcCustomVoiceOutput extends AbstractModel
{
    /**
     * @var array <p>自定义音色列表。</p>
     */
    public $InfoList;

    /**
     * @param array $InfoList <p>自定义音色列表。</p>
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
        if (array_key_exists("InfoList",$param) and $param["InfoList"] !== null) {
            $this->InfoList = [];
            foreach ($param["InfoList"] as $key => $value){
                $obj = new CustomVoiceInfo();
                $obj->deserialize($value);
                array_push($this->InfoList, $obj);
            }
        }
    }
}
