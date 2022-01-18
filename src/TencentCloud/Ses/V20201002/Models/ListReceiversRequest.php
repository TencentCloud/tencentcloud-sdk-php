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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListReceivers请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，整型，从0开始
 * @method void setOffset(integer $Offset) 设置偏移量，整型，从0开始
 * @method integer getLimit() 获取限制数目，整型，不超过100
 * @method void setLimit(integer $Limit) 设置限制数目，整型，不超过100
 * @method integer getStatus() 获取列表状态(1 待上传 2 上传中  3传完成)，若查询所有就不传这个字段
 * @method void setStatus(integer $Status) 设置列表状态(1 待上传 2 上传中  3传完成)，若查询所有就不传这个字段
 * @method string getKeyWord() 获取列表名称的关键字，模糊查询
 * @method void setKeyWord(string $KeyWord) 设置列表名称的关键字，模糊查询
 */
class ListReceiversRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，整型，从0开始
     */
    public $Offset;

    /**
     * @var integer 限制数目，整型，不超过100
     */
    public $Limit;

    /**
     * @var integer 列表状态(1 待上传 2 上传中  3传完成)，若查询所有就不传这个字段
     */
    public $Status;

    /**
     * @var string 列表名称的关键字，模糊查询
     */
    public $KeyWord;

    /**
     * @param integer $Offset 偏移量，整型，从0开始
     * @param integer $Limit 限制数目，整型，不超过100
     * @param integer $Status 列表状态(1 待上传 2 上传中  3传完成)，若查询所有就不传这个字段
     * @param string $KeyWord 列表名称的关键字，模糊查询
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("KeyWord",$param) and $param["KeyWord"] !== null) {
            $this->KeyWord = $param["KeyWord"];
        }
    }
}
