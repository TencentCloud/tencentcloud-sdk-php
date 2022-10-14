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
namespace TencentCloud\Bma\V20210624\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 保护网站信息
 *
 * @method integer getProtectURLId() 获取保护网站ID
 * @method void setProtectURLId(integer $ProtectURLId) 设置保护网站ID
 * @method string getProtectURL() 获取保护网站
 * @method void setProtectURL(string $ProtectURL) 设置保护网站
 * @method string getProtectWeb() 获取保护网站名称
 * @method void setProtectWeb(string $ProtectWeb) 设置保护网站名称
 * @method integer getProtectURLStatus() 获取保护网站审核状态 1-审核中 2-审核不通过 3-审核通过
 * @method void setProtectURLStatus(integer $ProtectURLStatus) 设置保护网站审核状态 1-审核中 2-审核不通过 3-审核通过
 * @method string getProtectURLNote() 获取网站审核不通过原因
 * @method void setProtectURLNote(string $ProtectURLNote) 设置网站审核不通过原因
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 */
class ProtectURLInfo extends AbstractModel
{
    /**
     * @var integer 保护网站ID
     */
    public $ProtectURLId;

    /**
     * @var string 保护网站
     */
    public $ProtectURL;

    /**
     * @var string 保护网站名称
     */
    public $ProtectWeb;

    /**
     * @var integer 保护网站审核状态 1-审核中 2-审核不通过 3-审核通过
     */
    public $ProtectURLStatus;

    /**
     * @var string 网站审核不通过原因
     */
    public $ProtectURLNote;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @param integer $ProtectURLId 保护网站ID
     * @param string $ProtectURL 保护网站
     * @param string $ProtectWeb 保护网站名称
     * @param integer $ProtectURLStatus 保护网站审核状态 1-审核中 2-审核不通过 3-审核通过
     * @param string $ProtectURLNote 网站审核不通过原因
     * @param string $CreateTime 创建时间
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
        if (array_key_exists("ProtectURLId",$param) and $param["ProtectURLId"] !== null) {
            $this->ProtectURLId = $param["ProtectURLId"];
        }

        if (array_key_exists("ProtectURL",$param) and $param["ProtectURL"] !== null) {
            $this->ProtectURL = $param["ProtectURL"];
        }

        if (array_key_exists("ProtectWeb",$param) and $param["ProtectWeb"] !== null) {
            $this->ProtectWeb = $param["ProtectWeb"];
        }

        if (array_key_exists("ProtectURLStatus",$param) and $param["ProtectURLStatus"] !== null) {
            $this->ProtectURLStatus = $param["ProtectURLStatus"];
        }

        if (array_key_exists("ProtectURLNote",$param) and $param["ProtectURLNote"] !== null) {
            $this->ProtectURLNote = $param["ProtectURLNote"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
