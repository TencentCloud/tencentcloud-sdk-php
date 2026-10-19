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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateNotebookImage请求参数结构体
 *
 * @method ImageInfo getImageInfo() 获取<p>镜像信息</p>
 * @method void setImageInfo(ImageInfo $ImageInfo) 设置<p>镜像信息</p>
 * @method string getNotebookId() 获取<p>notebook id</p>
 * @method void setNotebookId(string $NotebookId) 设置<p>notebook id</p>
 * @method string getTiProjectId() 获取<p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
 * @method void setTiProjectId(string $TiProjectId) 设置<p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
 * @method array getKernels() 获取<p>要保存的kernel数组</p>
 * @method void setKernels(array $Kernels) 设置<p>要保存的kernel数组</p>
 * @method boolean getRegisterToImageCenter() 获取<p>是否保存到镜像中心</p>
 * @method void setRegisterToImageCenter(boolean $RegisterToImageCenter) 设置<p>是否保存到镜像中心</p>
 */
class CreateNotebookImageRequest extends AbstractModel
{
    /**
     * @var ImageInfo <p>镜像信息</p>
     */
    public $ImageInfo;

    /**
     * @var string <p>notebook id</p>
     */
    public $NotebookId;

    /**
     * @var string <p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
     */
    public $TiProjectId;

    /**
     * @var array <p>要保存的kernel数组</p>
     */
    public $Kernels;

    /**
     * @var boolean <p>是否保存到镜像中心</p>
     */
    public $RegisterToImageCenter;

    /**
     * @param ImageInfo $ImageInfo <p>镜像信息</p>
     * @param string $NotebookId <p>notebook id</p>
     * @param string $TiProjectId <p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
     * @param array $Kernels <p>要保存的kernel数组</p>
     * @param boolean $RegisterToImageCenter <p>是否保存到镜像中心</p>
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
        if (array_key_exists("ImageInfo",$param) and $param["ImageInfo"] !== null) {
            $this->ImageInfo = new ImageInfo();
            $this->ImageInfo->deserialize($param["ImageInfo"]);
        }

        if (array_key_exists("NotebookId",$param) and $param["NotebookId"] !== null) {
            $this->NotebookId = $param["NotebookId"];
        }

        if (array_key_exists("TiProjectId",$param) and $param["TiProjectId"] !== null) {
            $this->TiProjectId = $param["TiProjectId"];
        }

        if (array_key_exists("Kernels",$param) and $param["Kernels"] !== null) {
            $this->Kernels = $param["Kernels"];
        }

        if (array_key_exists("RegisterToImageCenter",$param) and $param["RegisterToImageCenter"] !== null) {
            $this->RegisterToImageCenter = $param["RegisterToImageCenter"];
        }
    }
}
