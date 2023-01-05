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
namespace TencentCloud\Hasim\V20210716\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTag请求参数结构体
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method integer getTagID() 获取标签ID
 * @method void setTagID(integer $TagID) 设置标签ID
 * @method string getComment() 获取备注
 * @method void setComment(string $Comment) 设置备注
 */
class ModifyTagRequest extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var integer 标签ID
     */
    public $TagID;

    /**
     * @var string 备注
     */
    public $Comment;

    /**
     * @param string $Name 名称
     * @param integer $TagID 标签ID
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TagID",$param) and $param["TagID"] !== null) {
            $this->TagID = $param["TagID"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
