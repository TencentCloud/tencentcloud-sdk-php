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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScanLogs请求参数结构体
 *
 * @method integer getCorpId() 获取企业ID
 * @method void setCorpId(integer $CorpId) 设置企业ID
 * @method integer getPageSize() 获取分页数量
 * @method void setPageSize(integer $PageSize) 设置分页数量
 * @method integer getPageNumber() 获取当前分页
 * @method void setPageNumber(integer $PageNumber) 设置当前分页
 * @method string getCode() 获取安心码
 * @method void setCode(string $Code) 设置安心码
 * @method string getOpenid() 获取小程序用户ID
 * @method void setOpenid(string $Openid) 设置小程序用户ID
 */
class DescribeScanLogsRequest extends AbstractModel
{
    /**
     * @var integer 企业ID
     */
    public $CorpId;

    /**
     * @var integer 分页数量
     */
    public $PageSize;

    /**
     * @var integer 当前分页
     */
    public $PageNumber;

    /**
     * @var string 安心码
     */
    public $Code;

    /**
     * @var string 小程序用户ID
     */
    public $Openid;

    /**
     * @param integer $CorpId 企业ID
     * @param integer $PageSize 分页数量
     * @param integer $PageNumber 当前分页
     * @param string $Code 安心码
     * @param string $Openid 小程序用户ID
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
        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Openid",$param) and $param["Openid"] !== null) {
            $this->Openid = $param["Openid"];
        }
    }
}
