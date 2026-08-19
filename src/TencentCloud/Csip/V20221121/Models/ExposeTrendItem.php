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
 * 暴露趋势周期统计数量信息
 *
 * @method integer getOpenCount() 获取完全开放数量
 * @method void setOpenCount(integer $OpenCount) 设置完全开放数量
 * @method integer getAclCount() 获取受限访问数量
 * @method void setAclCount(integer $AclCount) 设置受限访问数量
 * @method integer getCloseCount() 获取无法访问数量
 * @method void setCloseCount(integer $CloseCount) 设置无法访问数量
 * @method string getDate() 获取日期
 * @method void setDate(string $Date) 设置日期
 */
class ExposeTrendItem extends AbstractModel
{
    /**
     * @var integer 完全开放数量
     */
    public $OpenCount;

    /**
     * @var integer 受限访问数量
     */
    public $AclCount;

    /**
     * @var integer 无法访问数量
     */
    public $CloseCount;

    /**
     * @var string 日期
     */
    public $Date;

    /**
     * @param integer $OpenCount 完全开放数量
     * @param integer $AclCount 受限访问数量
     * @param integer $CloseCount 无法访问数量
     * @param string $Date 日期
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
        if (array_key_exists("OpenCount",$param) and $param["OpenCount"] !== null) {
            $this->OpenCount = $param["OpenCount"];
        }

        if (array_key_exists("AclCount",$param) and $param["AclCount"] !== null) {
            $this->AclCount = $param["AclCount"];
        }

        if (array_key_exists("CloseCount",$param) and $param["CloseCount"] !== null) {
            $this->CloseCount = $param["CloseCount"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }
    }
}
