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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 平台版资源信息
 *
 * @method string getResType() 获取<p>资源类系</p><p>枚举值：</p><ul><li>log： 日志</li><li>storage： 云存储</li><li>hosting： 静态托管</li></ul>
 * @method void setResType(string $ResType) 设置<p>资源类系</p><p>枚举值：</p><ul><li>log： 日志</li><li>storage： 云存储</li><li>hosting： 静态托管</li></ul>
 * @method string getResName() 获取<p>资源唯一标识</p>
 * @method void setResName(string $ResName) 设置<p>资源唯一标识</p>
 * @method string getDetail() 获取<p>资源详细信息</p>
 * @method void setDetail(string $Detail) 设置<p>资源详细信息</p>
 * @method integer getStatus() 获取<p>资源状态</p><p>枚举值：</p><ul><li>0： 正常</li><li>5： 初始化中</li></ul>
 * @method void setStatus(integer $Status) 设置<p>资源状态</p><p>枚举值：</p><ul><li>0： 正常</li><li>5： 初始化中</li></ul>
 * @method integer getPlatformId() 获取<p>资源id</p>
 * @method void setPlatformId(integer $PlatformId) 设置<p>资源id</p>
 * @method integer getId() 获取<p>对用平台资源id</p>
 * @method void setId(integer $Id) 设置<p>对用平台资源id</p>
 */
class PlatFormResourceInfo extends AbstractModel
{
    /**
     * @var string <p>资源类系</p><p>枚举值：</p><ul><li>log： 日志</li><li>storage： 云存储</li><li>hosting： 静态托管</li></ul>
     */
    public $ResType;

    /**
     * @var string <p>资源唯一标识</p>
     */
    public $ResName;

    /**
     * @var string <p>资源详细信息</p>
     */
    public $Detail;

    /**
     * @var integer <p>资源状态</p><p>枚举值：</p><ul><li>0： 正常</li><li>5： 初始化中</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>资源id</p>
     */
    public $PlatformId;

    /**
     * @var integer <p>对用平台资源id</p>
     */
    public $Id;

    /**
     * @param string $ResType <p>资源类系</p><p>枚举值：</p><ul><li>log： 日志</li><li>storage： 云存储</li><li>hosting： 静态托管</li></ul>
     * @param string $ResName <p>资源唯一标识</p>
     * @param string $Detail <p>资源详细信息</p>
     * @param integer $Status <p>资源状态</p><p>枚举值：</p><ul><li>0： 正常</li><li>5： 初始化中</li></ul>
     * @param integer $PlatformId <p>资源id</p>
     * @param integer $Id <p>对用平台资源id</p>
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
        if (array_key_exists("ResType",$param) and $param["ResType"] !== null) {
            $this->ResType = $param["ResType"];
        }

        if (array_key_exists("ResName",$param) and $param["ResName"] !== null) {
            $this->ResName = $param["ResName"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
