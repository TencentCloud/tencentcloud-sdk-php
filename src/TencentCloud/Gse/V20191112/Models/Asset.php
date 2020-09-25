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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 生成包信息
 *
 * @method string getAssetId() 获取生成包ID
 * @method void setAssetId(string $AssetId) 设置生成包ID
 * @method string getAssetName() 获取生成包名字，最小长度为1，最大长度为64
 * @method void setAssetName(string $AssetName) 设置生成包名字，最小长度为1，最大长度为64
 * @method string getAssetVersion() 获取生成包版本，最小长度为1，最大长度为64
 * @method void setAssetVersion(string $AssetVersion) 设置生成包版本，最小长度为1，最大长度为64
 * @method string getOperateSystem() 获取生成包可运行的操作系统，暂时只支持CentOS7.16
 * @method void setOperateSystem(string $OperateSystem) 设置生成包可运行的操作系统，暂时只支持CentOS7.16
 * @method integer getStauts() 获取生成包状态，0代表上传中，1代表上传失败，2代表上传成功
 * @method void setStauts(integer $Stauts) 设置生成包状态，0代表上传中，1代表上传失败，2代表上传成功
 * @method string getSize() 获取生成包大小
 * @method void setSize(string $Size) 设置生成包大小
 * @method string getCreateTime() 获取生成包创建时间
 * @method void setCreateTime(string $CreateTime) 设置生成包创建时间
 * @method integer getBindFleetNum() 获取生成包绑定的Fleet个数，最小值为0
 * @method void setBindFleetNum(integer $BindFleetNum) 设置生成包绑定的Fleet个数，最小值为0
 */
class Asset extends AbstractModel
{
    /**
     * @var string 生成包ID
     */
    public $AssetId;

    /**
     * @var string 生成包名字，最小长度为1，最大长度为64
     */
    public $AssetName;

    /**
     * @var string 生成包版本，最小长度为1，最大长度为64
     */
    public $AssetVersion;

    /**
     * @var string 生成包可运行的操作系统，暂时只支持CentOS7.16
     */
    public $OperateSystem;

    /**
     * @var integer 生成包状态，0代表上传中，1代表上传失败，2代表上传成功
     */
    public $Stauts;

    /**
     * @var string 生成包大小
     */
    public $Size;

    /**
     * @var string 生成包创建时间
     */
    public $CreateTime;

    /**
     * @var integer 生成包绑定的Fleet个数，最小值为0
     */
    public $BindFleetNum;

    /**
     * @param string $AssetId 生成包ID
     * @param string $AssetName 生成包名字，最小长度为1，最大长度为64
     * @param string $AssetVersion 生成包版本，最小长度为1，最大长度为64
     * @param string $OperateSystem 生成包可运行的操作系统，暂时只支持CentOS7.16
     * @param integer $Stauts 生成包状态，0代表上传中，1代表上传失败，2代表上传成功
     * @param string $Size 生成包大小
     * @param string $CreateTime 生成包创建时间
     * @param integer $BindFleetNum 生成包绑定的Fleet个数，最小值为0
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssetVersion",$param) and $param["AssetVersion"] !== null) {
            $this->AssetVersion = $param["AssetVersion"];
        }

        if (array_key_exists("OperateSystem",$param) and $param["OperateSystem"] !== null) {
            $this->OperateSystem = $param["OperateSystem"];
        }

        if (array_key_exists("Stauts",$param) and $param["Stauts"] !== null) {
            $this->Stauts = $param["Stauts"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BindFleetNum",$param) and $param["BindFleetNum"] !== null) {
            $this->BindFleetNum = $param["BindFleetNum"];
        }
    }
}
