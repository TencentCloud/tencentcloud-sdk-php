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
 * DescribeKTVSingerMusics请求参数结构体
 *
 * @method string getSingerId() 获取歌手id
 * @method void setSingerId(string $SingerId) 设置歌手id
 * @method integer getOffset() 获取分页偏移量，默认值：0。
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认值：0。
 * @method integer getLimit() 获取分页返回的记录条数，默认值：50。将返回第 Offset 到第 Offset+Limit-1 条。
 * @method void setLimit(integer $Limit) 设置分页返回的记录条数，默认值：50。将返回第 Offset 到第 Offset+Limit-1 条。
 */
class DescribeKTVSingerMusicsRequest extends AbstractModel
{
    /**
     * @var string 歌手id
     */
    public $SingerId;

    /**
     * @var integer 分页偏移量，默认值：0。
     */
    public $Offset;

    /**
     * @var integer 分页返回的记录条数，默认值：50。将返回第 Offset 到第 Offset+Limit-1 条。
     */
    public $Limit;

    /**
     * @param string $SingerId 歌手id
     * @param integer $Offset 分页偏移量，默认值：0。
     * @param integer $Limit 分页返回的记录条数，默认值：50。将返回第 Offset 到第 Offset+Limit-1 条。
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
        if (array_key_exists("SingerId",$param) and $param["SingerId"] !== null) {
            $this->SingerId = $param["SingerId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
