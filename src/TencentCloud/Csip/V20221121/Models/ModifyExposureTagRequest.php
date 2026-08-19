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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyExposureTag请求参数结构体
 *
 * @method array getExposureIDs() 获取云边界分析ID集合
 * @method void setExposureIDs(array $ExposureIDs) 设置云边界分析ID集合
 * @method string getTag() 获取标签
 * @method void setTag(string $Tag) 设置标签
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method string getComment() 获取备注
 * @method void setComment(string $Comment) 设置备注
 */
class ModifyExposureTagRequest extends AbstractModel
{
    /**
     * @var array 云边界分析ID集合
     */
    public $ExposureIDs;

    /**
     * @var string 标签
     */
    public $Tag;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var string 备注
     */
    public $Comment;

    /**
     * @param array $ExposureIDs 云边界分析ID集合
     * @param string $Tag 标签
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param string $Comment 备注
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
        if (array_key_exists("ExposureIDs",$param) and $param["ExposureIDs"] !== null) {
            $this->ExposureIDs = $param["ExposureIDs"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
