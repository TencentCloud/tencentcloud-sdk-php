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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 跨地域备份下载地址集合
 *
 * @method string getCrossRegion() 获取跨地域备份目标地域
 * @method void setCrossRegion(string $CrossRegion) 设置跨地域备份目标地域
 * @method string getCrossInternalAddr() 获取跨地域备份内网下载地址
 * @method void setCrossInternalAddr(string $CrossInternalAddr) 设置跨地域备份内网下载地址
 * @method string getCrossExternalAddr() 获取跨地域备份外网下载地址
 * @method void setCrossExternalAddr(string $CrossExternalAddr) 设置跨地域备份外网下载地址
 */
class CrossBackupAddr extends AbstractModel
{
    /**
     * @var string 跨地域备份目标地域
     */
    public $CrossRegion;

    /**
     * @var string 跨地域备份内网下载地址
     */
    public $CrossInternalAddr;

    /**
     * @var string 跨地域备份外网下载地址
     */
    public $CrossExternalAddr;

    /**
     * @param string $CrossRegion 跨地域备份目标地域
     * @param string $CrossInternalAddr 跨地域备份内网下载地址
     * @param string $CrossExternalAddr 跨地域备份外网下载地址
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
        if (array_key_exists("CrossRegion",$param) and $param["CrossRegion"] !== null) {
            $this->CrossRegion = $param["CrossRegion"];
        }

        if (array_key_exists("CrossInternalAddr",$param) and $param["CrossInternalAddr"] !== null) {
            $this->CrossInternalAddr = $param["CrossInternalAddr"];
        }

        if (array_key_exists("CrossExternalAddr",$param) and $param["CrossExternalAddr"] !== null) {
            $this->CrossExternalAddr = $param["CrossExternalAddr"];
        }
    }
}
