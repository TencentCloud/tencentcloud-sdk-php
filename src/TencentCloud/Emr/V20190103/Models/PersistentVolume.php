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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 卷目录
 *
 * @method array getCBSVolumes() 获取<p>cbs 存储卷</p>
 * @method void setCBSVolumes(array $CBSVolumes) 设置<p>cbs 存储卷</p>
 * @method array getCFSVolumes() 获取<p>cfs存储卷</p>
 * @method void setCFSVolumes(array $CFSVolumes) 设置<p>cfs存储卷</p>
 * @method array getCOSVolumes() 获取<p>cos 存储卷</p>
 * @method void setCOSVolumes(array $COSVolumes) 设置<p>cos 存储卷</p>
 * @method array getStorageVolumeName() 获取<p>存储卷名称（yaml 提交的没有存储卷的类型）</p>
 * @method void setStorageVolumeName(array $StorageVolumeName) 设置<p>存储卷名称（yaml 提交的没有存储卷的类型）</p>
 * @method array getVolumeMounts() 获取<p>存储卷列表</p>
 * @method void setVolumeMounts(array $VolumeMounts) 设置<p>存储卷列表</p>
 * @method array getStorageVolumeDetail() 获取<p>存储卷详情</p>
 * @method void setStorageVolumeDetail(array $StorageVolumeDetail) 设置<p>存储卷详情</p>
 * @method array getCFSTurboVolumes() 获取<p>cfs trubo存储卷</p>
 * @method void setCFSTurboVolumes(array $CFSTurboVolumes) 设置<p>cfs trubo存储卷</p>
 */
class PersistentVolume extends AbstractModel
{
    /**
     * @var array <p>cbs 存储卷</p>
     */
    public $CBSVolumes;

    /**
     * @var array <p>cfs存储卷</p>
     */
    public $CFSVolumes;

    /**
     * @var array <p>cos 存储卷</p>
     */
    public $COSVolumes;

    /**
     * @var array <p>存储卷名称（yaml 提交的没有存储卷的类型）</p>
     */
    public $StorageVolumeName;

    /**
     * @var array <p>存储卷列表</p>
     */
    public $VolumeMounts;

    /**
     * @var array <p>存储卷详情</p>
     */
    public $StorageVolumeDetail;

    /**
     * @var array <p>cfs trubo存储卷</p>
     */
    public $CFSTurboVolumes;

    /**
     * @param array $CBSVolumes <p>cbs 存储卷</p>
     * @param array $CFSVolumes <p>cfs存储卷</p>
     * @param array $COSVolumes <p>cos 存储卷</p>
     * @param array $StorageVolumeName <p>存储卷名称（yaml 提交的没有存储卷的类型）</p>
     * @param array $VolumeMounts <p>存储卷列表</p>
     * @param array $StorageVolumeDetail <p>存储卷详情</p>
     * @param array $CFSTurboVolumes <p>cfs trubo存储卷</p>
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
        if (array_key_exists("CBSVolumes",$param) and $param["CBSVolumes"] !== null) {
            $this->CBSVolumes = [];
            foreach ($param["CBSVolumes"] as $key => $value){
                $obj = new CBSVolume();
                $obj->deserialize($value);
                array_push($this->CBSVolumes, $obj);
            }
        }

        if (array_key_exists("CFSVolumes",$param) and $param["CFSVolumes"] !== null) {
            $this->CFSVolumes = [];
            foreach ($param["CFSVolumes"] as $key => $value){
                $obj = new CFSVolume();
                $obj->deserialize($value);
                array_push($this->CFSVolumes, $obj);
            }
        }

        if (array_key_exists("COSVolumes",$param) and $param["COSVolumes"] !== null) {
            $this->COSVolumes = [];
            foreach ($param["COSVolumes"] as $key => $value){
                $obj = new COSVolume();
                $obj->deserialize($value);
                array_push($this->COSVolumes, $obj);
            }
        }

        if (array_key_exists("StorageVolumeName",$param) and $param["StorageVolumeName"] !== null) {
            $this->StorageVolumeName = $param["StorageVolumeName"];
        }

        if (array_key_exists("VolumeMounts",$param) and $param["VolumeMounts"] !== null) {
            $this->VolumeMounts = [];
            foreach ($param["VolumeMounts"] as $key => $value){
                $obj = new VolumeMount();
                $obj->deserialize($value);
                array_push($this->VolumeMounts, $obj);
            }
        }

        if (array_key_exists("StorageVolumeDetail",$param) and $param["StorageVolumeDetail"] !== null) {
            $this->StorageVolumeDetail = [];
            foreach ($param["StorageVolumeDetail"] as $key => $value){
                $obj = new StorageVolumeDetail();
                $obj->deserialize($value);
                array_push($this->StorageVolumeDetail, $obj);
            }
        }

        if (array_key_exists("CFSTurboVolumes",$param) and $param["CFSTurboVolumes"] !== null) {
            $this->CFSTurboVolumes = [];
            foreach ($param["CFSTurboVolumes"] as $key => $value){
                $obj = new CFSTurboVolume();
                $obj->deserialize($value);
                array_push($this->CFSTurboVolumes, $obj);
            }
        }
    }
}
