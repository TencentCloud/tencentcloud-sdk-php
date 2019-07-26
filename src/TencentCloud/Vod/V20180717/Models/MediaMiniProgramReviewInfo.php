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
 * @method array getMiniProgramReivewList() 获取审核信息列表。
 * @method void setMiniProgramReivewList(array $MiniProgramReivewList) 设置审核信息列表。
 */

/**
 *小程序审核信息
 */
class MediaMiniProgramReviewInfo extends AbstractModel
{
    /**
     * @var array 审核信息列表。
     */
    public $MiniProgramReivewList;
    /**
     * @param array $MiniProgramReivewList 审核信息列表。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("MiniProgramReivewList",$param) and $param["MiniProgramReivewList"] !== null) {
            $this->MiniProgramReivewList = [];
            foreach ($param["MiniProgramReivewList"] as $key => $value){
                $obj = new MediaMiniProgramReviewInfoItem();
                $obj->deserialize($value);
                array_push($this->MiniProgramReivewList, $obj);
            }
        }
    }
}
