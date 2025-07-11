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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份实例中关于cos的信息
 *
 * @method string getCosBucket() 获取备份文件所在的cos桶
 * @method void setCosBucket(string $CosBucket) 设置备份文件所在的cos桶
 * @method string getCosPath() 获取备份文件所在的完整cos路径
 * @method void setCosPath(string $CosPath) 设置备份文件所在的完整cos路径
 * @method string getSnapShotPath() 获取备份文件名称
 * @method void setSnapShotPath(string $SnapShotPath) 设置备份文件名称
 * @method string getRegion() 获取cos桶所在地域
 * @method void setRegion(string $Region) 设置cos桶所在地域
 */
class BackupCosInfo extends AbstractModel
{
    /**
     * @var string 备份文件所在的cos桶
     */
    public $CosBucket;

    /**
     * @var string 备份文件所在的完整cos路径
     */
    public $CosPath;

    /**
     * @var string 备份文件名称
     */
    public $SnapShotPath;

    /**
     * @var string cos桶所在地域
     */
    public $Region;

    /**
     * @param string $CosBucket 备份文件所在的cos桶
     * @param string $CosPath 备份文件所在的完整cos路径
     * @param string $SnapShotPath 备份文件名称
     * @param string $Region cos桶所在地域
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
        if (array_key_exists("CosBucket",$param) and $param["CosBucket"] !== null) {
            $this->CosBucket = $param["CosBucket"];
        }

        if (array_key_exists("CosPath",$param) and $param["CosPath"] !== null) {
            $this->CosPath = $param["CosPath"];
        }

        if (array_key_exists("SnapShotPath",$param) and $param["SnapShotPath"] !== null) {
            $this->SnapShotPath = $param["SnapShotPath"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
