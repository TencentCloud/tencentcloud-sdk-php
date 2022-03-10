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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 即使广播曲库歌曲标签分组信息
 *
 * @method string getEnglishGroupName() 获取标签分组英文名
 * @method void setEnglishGroupName(string $EnglishGroupName) 设置标签分组英文名
 * @method string getChineseGroupName() 获取标签分组中文名
 * @method void setChineseGroupName(string $ChineseGroupName) 设置标签分组中文名
 * @method array getTagSet() 获取标签分类下标签列表
 * @method void setTagSet(array $TagSet) 设置标签分类下标签列表
 */
class KTVMusicTagGroup extends AbstractModel
{
    /**
     * @var string 标签分组英文名
     */
    public $EnglishGroupName;

    /**
     * @var string 标签分组中文名
     */
    public $ChineseGroupName;

    /**
     * @var array 标签分类下标签列表
     */
    public $TagSet;

    /**
     * @param string $EnglishGroupName 标签分组英文名
     * @param string $ChineseGroupName 标签分组中文名
     * @param array $TagSet 标签分类下标签列表
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
        if (array_key_exists("EnglishGroupName",$param) and $param["EnglishGroupName"] !== null) {
            $this->EnglishGroupName = $param["EnglishGroupName"];
        }

        if (array_key_exists("ChineseGroupName",$param) and $param["ChineseGroupName"] !== null) {
            $this->ChineseGroupName = $param["ChineseGroupName"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new KTVMusicTagInfo();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }
    }
}
