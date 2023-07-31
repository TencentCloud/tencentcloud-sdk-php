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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateNotebookImage请求参数结构体
 *
 * @method array getKernels() 获取要保存的kernel数组
 * @method void setKernels(array $Kernels) 设置要保存的kernel数组
 * @method ImageInfo getImageInfo() 获取镜像信息
 * @method void setImageInfo(ImageInfo $ImageInfo) 设置镜像信息
 * @method string getNotebookId() 获取notebook id
 * @method void setNotebookId(string $NotebookId) 设置notebook id
 */
class CreateNotebookImageRequest extends AbstractModel
{
    /**
     * @var array 要保存的kernel数组
     */
    public $Kernels;

    /**
     * @var ImageInfo 镜像信息
     */
    public $ImageInfo;

    /**
     * @var string notebook id
     */
    public $NotebookId;

    /**
     * @param array $Kernels 要保存的kernel数组
     * @param ImageInfo $ImageInfo 镜像信息
     * @param string $NotebookId notebook id
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
        if (array_key_exists("Kernels",$param) and $param["Kernels"] !== null) {
            $this->Kernels = $param["Kernels"];
        }

        if (array_key_exists("ImageInfo",$param) and $param["ImageInfo"] !== null) {
            $this->ImageInfo = new ImageInfo();
            $this->ImageInfo->deserialize($param["ImageInfo"]);
        }

        if (array_key_exists("NotebookId",$param) and $param["NotebookId"] !== null) {
            $this->NotebookId = $param["NotebookId"];
        }
    }
}
