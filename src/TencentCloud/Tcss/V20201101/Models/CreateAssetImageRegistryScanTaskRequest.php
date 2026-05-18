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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAssetImageRegistryScanTask请求参数结构体
 *
 * @method boolean getAll() 获取<p>是否扫描全部镜像</p>
 * @method void setAll(boolean $All) 设置<p>是否扫描全部镜像</p>
 * @method array getImages() 获取<p>扫描的镜像列表</p>
 * @method void setImages(array $Images) 设置<p>扫描的镜像列表</p>
 * @method array getScanType() 获取<p>扫描类型数组</p>
 * @method void setScanType(array $ScanType) 设置<p>扫描类型数组</p>
 * @method array getId() 获取<p>扫描的镜像列表</p>
 * @method void setId(array $Id) 设置<p>扫描的镜像列表</p>
 * @method array getFilters() 获取<p>过滤条件</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件</p>
 * @method array getExcludeImageList() 获取<p>不需要扫描的镜像列表, 与Filters配合使用</p>
 * @method void setExcludeImageList(array $ExcludeImageList) 设置<p>不需要扫描的镜像列表, 与Filters配合使用</p>
 * @method boolean getOnlyScanLatest() 获取<p>是否仅扫描各repository最新版的镜像, 与Filters配合使用</p>
 * @method void setOnlyScanLatest(boolean $OnlyScanLatest) 设置<p>是否仅扫描各repository最新版的镜像, 与Filters配合使用</p>
 * @method integer getTimeout() 获取<p>任务超时时长</p><p>单位：秒</p>
 * @method void setTimeout(integer $Timeout) 设置<p>任务超时时长</p><p>单位：秒</p>
 */
class CreateAssetImageRegistryScanTaskRequest extends AbstractModel
{
    /**
     * @var boolean <p>是否扫描全部镜像</p>
     */
    public $All;

    /**
     * @var array <p>扫描的镜像列表</p>
     */
    public $Images;

    /**
     * @var array <p>扫描类型数组</p>
     */
    public $ScanType;

    /**
     * @var array <p>扫描的镜像列表</p>
     */
    public $Id;

    /**
     * @var array <p>过滤条件</p>
     */
    public $Filters;

    /**
     * @var array <p>不需要扫描的镜像列表, 与Filters配合使用</p>
     */
    public $ExcludeImageList;

    /**
     * @var boolean <p>是否仅扫描各repository最新版的镜像, 与Filters配合使用</p>
     */
    public $OnlyScanLatest;

    /**
     * @var integer <p>任务超时时长</p><p>单位：秒</p>
     */
    public $Timeout;

    /**
     * @param boolean $All <p>是否扫描全部镜像</p>
     * @param array $Images <p>扫描的镜像列表</p>
     * @param array $ScanType <p>扫描类型数组</p>
     * @param array $Id <p>扫描的镜像列表</p>
     * @param array $Filters <p>过滤条件</p>
     * @param array $ExcludeImageList <p>不需要扫描的镜像列表, 与Filters配合使用</p>
     * @param boolean $OnlyScanLatest <p>是否仅扫描各repository最新版的镜像, 与Filters配合使用</p>
     * @param integer $Timeout <p>任务超时时长</p><p>单位：秒</p>
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
        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = [];
            foreach ($param["Images"] as $key => $value){
                $obj = new ImageInfo();
                $obj->deserialize($value);
                array_push($this->Images, $obj);
            }
        }

        if (array_key_exists("ScanType",$param) and $param["ScanType"] !== null) {
            $this->ScanType = $param["ScanType"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ExcludeImageList",$param) and $param["ExcludeImageList"] !== null) {
            $this->ExcludeImageList = $param["ExcludeImageList"];
        }

        if (array_key_exists("OnlyScanLatest",$param) and $param["OnlyScanLatest"] !== null) {
            $this->OnlyScanLatest = $param["OnlyScanLatest"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }
    }
}
