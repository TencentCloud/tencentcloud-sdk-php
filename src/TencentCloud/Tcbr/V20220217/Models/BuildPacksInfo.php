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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BuildPacks信息
 *
 * @method string getBaseImage() 获取基础镜像
 * @method void setBaseImage(string $BaseImage) 设置基础镜像
 * @method string getEntryPoint() 获取启动命令
 * @method void setEntryPoint(string $EntryPoint) 设置启动命令
 * @method string getRepoLanguage() 获取语言
 * @method void setRepoLanguage(string $RepoLanguage) 设置语言
 * @method string getUploadFilename() 获取上传文件名
 * @method void setUploadFilename(string $UploadFilename) 设置上传文件名
 */
class BuildPacksInfo extends AbstractModel
{
    /**
     * @var string 基础镜像
     */
    public $BaseImage;

    /**
     * @var string 启动命令
     */
    public $EntryPoint;

    /**
     * @var string 语言
     */
    public $RepoLanguage;

    /**
     * @var string 上传文件名
     */
    public $UploadFilename;

    /**
     * @param string $BaseImage 基础镜像
     * @param string $EntryPoint 启动命令
     * @param string $RepoLanguage 语言
     * @param string $UploadFilename 上传文件名
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
        if (array_key_exists("BaseImage",$param) and $param["BaseImage"] !== null) {
            $this->BaseImage = $param["BaseImage"];
        }

        if (array_key_exists("EntryPoint",$param) and $param["EntryPoint"] !== null) {
            $this->EntryPoint = $param["EntryPoint"];
        }

        if (array_key_exists("RepoLanguage",$param) and $param["RepoLanguage"] !== null) {
            $this->RepoLanguage = $param["RepoLanguage"];
        }

        if (array_key_exists("UploadFilename",$param) and $param["UploadFilename"] !== null) {
            $this->UploadFilename = $param["UploadFilename"];
        }
    }
}
