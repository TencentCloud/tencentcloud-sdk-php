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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ProgramFpgaImage请求参数结构体
 *
 * @method string getInstanceId() 获取实例的ID信息。
 * @method void setInstanceId(string $InstanceId) 设置实例的ID信息。
 * @method string getFPGAUrl() 获取FPGA镜像文件的COS URL地址。
 * @method void setFPGAUrl(string $FPGAUrl) 设置FPGA镜像文件的COS URL地址。
 * @method array getDBDFs() 获取实例上FPGA卡的DBDF号，不填默认烧录FPGA镜像到实例所拥有的所有FPGA卡。
 * @method void setDBDFs(array $DBDFs) 设置实例上FPGA卡的DBDF号，不填默认烧录FPGA镜像到实例所拥有的所有FPGA卡。
 * @method boolean getDryRun() 获取试运行，不会执行实际的烧录动作，默认为False。
 * @method void setDryRun(boolean $DryRun) 设置试运行，不会执行实际的烧录动作，默认为False。
 */
class ProgramFpgaImageRequest extends AbstractModel
{
    /**
     * @var string 实例的ID信息。
     */
    public $InstanceId;

    /**
     * @var string FPGA镜像文件的COS URL地址。
     */
    public $FPGAUrl;

    /**
     * @var array 实例上FPGA卡的DBDF号，不填默认烧录FPGA镜像到实例所拥有的所有FPGA卡。
     */
    public $DBDFs;

    /**
     * @var boolean 试运行，不会执行实际的烧录动作，默认为False。
     */
    public $DryRun;

    /**
     * @param string $InstanceId 实例的ID信息。
     * @param string $FPGAUrl FPGA镜像文件的COS URL地址。
     * @param array $DBDFs 实例上FPGA卡的DBDF号，不填默认烧录FPGA镜像到实例所拥有的所有FPGA卡。
     * @param boolean $DryRun 试运行，不会执行实际的烧录动作，默认为False。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("FPGAUrl",$param) and $param["FPGAUrl"] !== null) {
            $this->FPGAUrl = $param["FPGAUrl"];
        }

        if (array_key_exists("DBDFs",$param) and $param["DBDFs"] !== null) {
            $this->DBDFs = $param["DBDFs"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
