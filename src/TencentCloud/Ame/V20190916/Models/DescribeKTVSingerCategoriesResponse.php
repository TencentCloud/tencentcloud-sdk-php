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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeKTVSingerCategories返回参数结构体
 *
 * @method array getGenderSet() 获取歌手性别分类列表
 * @method void setGenderSet(array $GenderSet) 设置歌手性别分类列表
 * @method array getAreaSet() 获取歌手区域分类列表
 * @method void setAreaSet(array $AreaSet) 设置歌手区域分类列表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeKTVSingerCategoriesResponse extends AbstractModel
{
    /**
     * @var array 歌手性别分类列表
     */
    public $GenderSet;

    /**
     * @var array 歌手区域分类列表
     */
    public $AreaSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $GenderSet 歌手性别分类列表
     * @param array $AreaSet 歌手区域分类列表
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("GenderSet",$param) and $param["GenderSet"] !== null) {
            $this->GenderSet = [];
            foreach ($param["GenderSet"] as $key => $value){
                $obj = new KTVSingerCategoryInfo();
                $obj->deserialize($value);
                array_push($this->GenderSet, $obj);
            }
        }

        if (array_key_exists("AreaSet",$param) and $param["AreaSet"] !== null) {
            $this->AreaSet = [];
            foreach ($param["AreaSet"] as $key => $value){
                $obj = new KTVSingerCategoryInfo();
                $obj->deserialize($value);
                array_push($this->AreaSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
