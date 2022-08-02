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
 * @method integer getProtectURLId() 获取xxx
 * @method void setProtectURLId(integer $ProtectURLId) 设置xxx
 * @method string getProtectURL() 获取xxx
 * @method void setProtectURL(string $ProtectURL) 设置xxx
 * @method string getProtectWeb() 获取xxx
 * @method void setProtectWeb(string $ProtectWeb) 设置xxx
 * @method integer getProtectURLStatus() 获取xxx
 * @method void setProtectURLStatus(integer $ProtectURLStatus) 设置xxx
 * @method string getProtectURLNote() 获取xxx
 * @method void setProtectURLNote(string $ProtectURLNote) 设置xxx
 * @method string getCreateTime() 获取xxx
 * @method void setCreateTime(string $CreateTime) 设置xxx
 */
class ProtectURLInfo extends AbstractModel
{
    /**
     * @var integer xxx
     */
    public $ProtectURLId;

    /**
     * @var string xxx
     */
    public $ProtectURL;

    /**
     * @var string xxx
     */
    public $ProtectWeb;

    /**
     * @var integer xxx
     */
    public $ProtectURLStatus;

    /**
     * @var string xxx
     */
    public $ProtectURLNote;

    /**
     * @var string xxx
     */
    public $CreateTime;

    /**
     * @param integer $ProtectURLId xxx
     * @param string $ProtectURL xxx
     * @param string $ProtectWeb xxx
     * @param integer $ProtectURLStatus xxx
     * @param string $ProtectURLNote xxx
     * @param string $CreateTime xxx
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
