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
 * @method integer getOffset() 获取offset (Default = 0)，(当前页-1) * Limit
 * @method void setOffset(integer $Offset) 设置offset (Default = 0)，(当前页-1) * Limit
 * @method integer getLimit() 获取条数，必须大于0，最大值为30
 * @method void setLimit(integer $Limit) 设置条数，必须大于0，最大值为30
 * @method string getCategoryId() 获取（电台/歌单）ID，CategoryId和CategoryCode两个必传1个
 * @method void setCategoryId(string $CategoryId) 设置（电台/歌单）ID，CategoryId和CategoryCode两个必传1个
 * @method string getCategoryCode() 获取（电台/歌单）代码，CategoryId和CategoryCode两个必传1个
 * @method void setCategoryCode(string $CategoryCode) 设置（电台/歌单）代码，CategoryId和CategoryCode两个必传1个
 */

/**
 *DescribeItems请求参数结构体
 */
class DescribeItemsRequest extends AbstractModel
{
    /**
     * @var integer offset (Default = 0)，(当前页-1) * Limit
     */
    public $Offset;

    /**
     * @var integer 条数，必须大于0，最大值为30
     */
    public $Limit;

    /**
     * @var string （电台/歌单）ID，CategoryId和CategoryCode两个必传1个
     */
    public $CategoryId;

    /**
     * @var string （电台/歌单）代码，CategoryId和CategoryCode两个必传1个
     */
    public $CategoryCode;
    /**
     * @param integer $Offset offset (Default = 0)，(当前页-1) * Limit
     * @param integer $Limit 条数，必须大于0，最大值为30
     * @param string $CategoryId （电台/歌单）ID，CategoryId和CategoryCode两个必传1个
     * @param string $CategoryCode （电台/歌单）代码，CategoryId和CategoryCode两个必传1个
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("CategoryCode",$param) and $param["CategoryCode"] !== null) {
            $this->CategoryCode = $param["CategoryCode"];
        }
    }
}
