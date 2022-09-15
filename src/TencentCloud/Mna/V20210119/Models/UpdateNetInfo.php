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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 更新设备网络状态信息
 *
 * @method integer getType() 获取网络类型：
0:数据
1:Wi-Fi
 * @method void setType(integer $Type) 设置网络类型：
0:数据
1:Wi-Fi
 * @method boolean getDataEnable() 获取启用/禁用
 * @method void setDataEnable(boolean $DataEnable) 设置启用/禁用
 * @method integer getUploadLimit() 获取上行限速：bit
 * @method void setUploadLimit(integer $UploadLimit) 设置上行限速：bit
 * @method integer getDownloadLimit() 获取下行限速：bit
 * @method void setDownloadLimit(integer $DownloadLimit) 设置下行限速：bit
 * @method string getNetInfoName() 获取网卡名
 * @method void setNetInfoName(string $NetInfoName) 设置网卡名
 */
class UpdateNetInfo extends AbstractModel
{
    /**
     * @var integer 网络类型：
0:数据
1:Wi-Fi
     */
    public $Type;

    /**
     * @var boolean 启用/禁用
     */
    public $DataEnable;

    /**
     * @var integer 上行限速：bit
     */
    public $UploadLimit;

    /**
     * @var integer 下行限速：bit
     */
    public $DownloadLimit;

    /**
     * @var string 网卡名
     */
    public $NetInfoName;

    /**
     * @param integer $Type 网络类型：
0:数据
1:Wi-Fi
     * @param boolean $DataEnable 启用/禁用
     * @param integer $UploadLimit 上行限速：bit
     * @param integer $DownloadLimit 下行限速：bit
     * @param string $NetInfoName 网卡名
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DataEnable",$param) and $param["DataEnable"] !== null) {
            $this->DataEnable = $param["DataEnable"];
        }

        if (array_key_exists("UploadLimit",$param) and $param["UploadLimit"] !== null) {
            $this->UploadLimit = $param["UploadLimit"];
        }

        if (array_key_exists("DownloadLimit",$param) and $param["DownloadLimit"] !== null) {
            $this->DownloadLimit = $param["DownloadLimit"];
        }

        if (array_key_exists("NetInfoName",$param) and $param["NetInfoName"] !== null) {
            $this->NetInfoName = $param["NetInfoName"];
        }
    }
}
