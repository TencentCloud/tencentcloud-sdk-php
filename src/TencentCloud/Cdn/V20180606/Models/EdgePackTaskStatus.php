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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 动态打包任务状态
 *
 * @method string getApk() 获取APK 名称
 * @method void setApk(string $Apk) 设置APK 名称
 * @method string getDstDir() 获取输出目录
 * @method void setDstDir(string $DstDir) 设置输出目录
 * @method string getUploadTime() 获取上传时间
 * @method void setUploadTime(string $UploadTime) 设置上传时间
 * @method string getStatus() 获取任务状态
created: 创建成功
processing: 处理中
done: 处理完成
failed: 处理失败
 * @method void setStatus(string $Status) 设置任务状态
created: 创建成功
processing: 处理中
done: 处理完成
failed: 处理失败
 * @method array getSrcDir() 获取上传目录
 * @method void setSrcDir(array $SrcDir) 设置上传目录
 * @method string getStatusDesc() 获取失败任务状态详情
 * @method void setStatusDesc(string $StatusDesc) 设置失败任务状态详情
 */
class EdgePackTaskStatus extends AbstractModel
{
    /**
     * @var string APK 名称
     */
    public $Apk;

    /**
     * @var string 输出目录
     */
    public $DstDir;

    /**
     * @var string 上传时间
     */
    public $UploadTime;

    /**
     * @var string 任务状态
created: 创建成功
processing: 处理中
done: 处理完成
failed: 处理失败
     */
    public $Status;

    /**
     * @var array 上传目录
     */
    public $SrcDir;

    /**
     * @var string 失败任务状态详情
     */
    public $StatusDesc;

    /**
     * @param string $Apk APK 名称
     * @param string $DstDir 输出目录
     * @param string $UploadTime 上传时间
     * @param string $Status 任务状态
created: 创建成功
processing: 处理中
done: 处理完成
failed: 处理失败
     * @param array $SrcDir 上传目录
     * @param string $StatusDesc 失败任务状态详情
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
        if (array_key_exists("Apk",$param) and $param["Apk"] !== null) {
            $this->Apk = $param["Apk"];
        }

        if (array_key_exists("DstDir",$param) and $param["DstDir"] !== null) {
            $this->DstDir = $param["DstDir"];
        }

        if (array_key_exists("UploadTime",$param) and $param["UploadTime"] !== null) {
            $this->UploadTime = $param["UploadTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SrcDir",$param) and $param["SrcDir"] !== null) {
            $this->SrcDir = $param["SrcDir"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }
    }
}
