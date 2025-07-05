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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupDownloadUserRestriction请求参数结构体
 *
 * @method integer getLimit() 获取分页大小
 * @method void setLimit(integer $Limit) 设置分页大小
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method boolean getOnlyUserRestriction() 获取是否只查询用户级别下载限制，true-是，false-否
 * @method void setOnlyUserRestriction(boolean $OnlyUserRestriction) 设置是否只查询用户级别下载限制，true-是，false-否
 */
class DescribeBackupDownloadUserRestrictionRequest extends AbstractModel
{
    /**
     * @var integer 分页大小
     */
    public $Limit;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var boolean 是否只查询用户级别下载限制，true-是，false-否
     */
    public $OnlyUserRestriction;

    /**
     * @param integer $Limit 分页大小
     * @param integer $Offset 偏移量
     * @param boolean $OnlyUserRestriction 是否只查询用户级别下载限制，true-是，false-否
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OnlyUserRestriction",$param) and $param["OnlyUserRestriction"] !== null) {
            $this->OnlyUserRestriction = $param["OnlyUserRestriction"];
        }
    }
}
