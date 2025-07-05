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
namespace TencentCloud\Rce\V20201103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询黑白名单入参
 *
 * @method integer getPageNumber() 获取当前页数
 * @method void setPageNumber(integer $PageNumber) 设置当前页数
 * @method integer getPageSize() 获取每页显示条数
 * @method void setPageSize(integer $PageSize) 设置每页显示条数
 * @method integer getListType() 获取名单类型 [1 黑名单 2 白名单]
 * @method void setListType(integer $ListType) 设置名单类型 [1 黑名单 2 白名单]
 * @method integer getDataType() 获取数据类型[1 手机号 2 qqOpenId 3 wechatOpenId 4 ip 6 idfa 7 imei]
 * @method void setDataType(integer $DataType) 设置数据类型[1 手机号 2 qqOpenId 3 wechatOpenId 4 ip 6 idfa 7 imei]
 * @method string getKeyWord() 获取关键字，按照名单名称搜索
 * @method void setKeyWord(string $KeyWord) 设置关键字，按照名单名称搜索
 * @method integer getStatus() 获取记录状态[1 启用 2 停用]
 * @method void setStatus(integer $Status) 设置记录状态[1 启用 2 停用]
 */
class InputDescribeNameListFront extends AbstractModel
{
    /**
     * @var integer 当前页数
     */
    public $PageNumber;

    /**
     * @var integer 每页显示条数
     */
    public $PageSize;

    /**
     * @var integer 名单类型 [1 黑名单 2 白名单]
     */
    public $ListType;

    /**
     * @var integer 数据类型[1 手机号 2 qqOpenId 3 wechatOpenId 4 ip 6 idfa 7 imei]
     */
    public $DataType;

    /**
     * @var string 关键字，按照名单名称搜索
     */
    public $KeyWord;

    /**
     * @var integer 记录状态[1 启用 2 停用]
     */
    public $Status;

    /**
     * @param integer $PageNumber 当前页数
     * @param integer $PageSize 每页显示条数
     * @param integer $ListType 名单类型 [1 黑名单 2 白名单]
     * @param integer $DataType 数据类型[1 手机号 2 qqOpenId 3 wechatOpenId 4 ip 6 idfa 7 imei]
     * @param string $KeyWord 关键字，按照名单名称搜索
     * @param integer $Status 记录状态[1 启用 2 停用]
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ListType",$param) and $param["ListType"] !== null) {
            $this->ListType = $param["ListType"];
        }

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }

        if (array_key_exists("KeyWord",$param) and $param["KeyWord"] !== null) {
            $this->KeyWord = $param["KeyWord"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
