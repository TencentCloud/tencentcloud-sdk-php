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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyImageAuthorized请求参数结构体
 *
 * @method boolean getAllLocalImages() 获取本地镜像是否全部授权的标识，优先权高于根据本地镜像ids授权。等于true时需UpdatedLocalImageCnt大于0。
 * @method void setAllLocalImages(boolean $AllLocalImages) 设置本地镜像是否全部授权的标识，优先权高于根据本地镜像ids授权。等于true时需UpdatedLocalImageCnt大于0。
 * @method boolean getAllRegistryImages() 获取仓库镜像是否全部授权的标识，优先权高于根据镜像ids授权。等于true时需UpdatedRegistryImageCnt大于0。
 * @method void setAllRegistryImages(boolean $AllRegistryImages) 设置仓库镜像是否全部授权的标识，优先权高于根据镜像ids授权。等于true时需UpdatedRegistryImageCnt大于0。
 * @method integer getUpdatedLocalImageCnt() 获取指定操作授权的本地镜像数量，判断优先权最高，实际多出的镜像随机忽略，实际不足的部分也忽略。
 * @method void setUpdatedLocalImageCnt(integer $UpdatedLocalImageCnt) 设置指定操作授权的本地镜像数量，判断优先权最高，实际多出的镜像随机忽略，实际不足的部分也忽略。
 * @method integer getUpdatedRegistryImageCnt() 获取指定操作授权的仓库镜像数量，判断优先权最高，实际多出的镜像随机忽略，实际不足的部分也忽略；
 * @method void setUpdatedRegistryImageCnt(integer $UpdatedRegistryImageCnt) 设置指定操作授权的仓库镜像数量，判断优先权最高，实际多出的镜像随机忽略，实际不足的部分也忽略；
 * @method string getImageSourceType() 获取根据满足条件的本地镜像授权,本地镜像来源；ASSETIMAGE:本地镜像列表；IMAGEALL:同步本地镜像；AllLocalImages为false且LocalImageIds为空和UpdatedLocalImageCnt大于0时，需要
 * @method void setImageSourceType(string $ImageSourceType) 设置根据满足条件的本地镜像授权,本地镜像来源；ASSETIMAGE:本地镜像列表；IMAGEALL:同步本地镜像；AllLocalImages为false且LocalImageIds为空和UpdatedLocalImageCnt大于0时，需要
 * @method array getLocalImageFilter() 获取根据满足条件的本地镜像授权，AllLocalImages为false且LocalImageIds为空和UpdatedLocalImageCnt大于0时，需要。
 * @method void setLocalImageFilter(array $LocalImageFilter) 设置根据满足条件的本地镜像授权，AllLocalImages为false且LocalImageIds为空和UpdatedLocalImageCnt大于0时，需要。
 * @method array getRegistryImageFilter() 获取根据满足条件的仓库镜像授权，AllRegistryImages为false且RegistryImageIds为空和UpdatedRegistryImageCnt大于0时，需要。
 * @method void setRegistryImageFilter(array $RegistryImageFilter) 设置根据满足条件的仓库镜像授权，AllRegistryImages为false且RegistryImageIds为空和UpdatedRegistryImageCnt大于0时，需要。
 * @method array getExcludeLocalImageIds() 获取根据满足条件的镜像授权,同时排除的本地镜像。
 * @method void setExcludeLocalImageIds(array $ExcludeLocalImageIds) 设置根据满足条件的镜像授权,同时排除的本地镜像。
 * @method array getExcludeRegistryImageIds() 获取根据满足条件的镜像授权,同时排除的仓库镜像。
 * @method void setExcludeRegistryImageIds(array $ExcludeRegistryImageIds) 设置根据满足条件的镜像授权,同时排除的仓库镜像。
 * @method array getLocalImageIds() 获取根据本地镜像ids授权，优先权高于根据满足条件的镜像授权。AllLocalImages为false且LocalImageFilter为空和UpdatedLocalImageCnt大于0时，需要。
 * @method void setLocalImageIds(array $LocalImageIds) 设置根据本地镜像ids授权，优先权高于根据满足条件的镜像授权。AllLocalImages为false且LocalImageFilter为空和UpdatedLocalImageCnt大于0时，需要。
 * @method array getRegistryImageIds() 获取根据仓库镜像Ids授权，优先权高于根据满足条件的镜像授。AllRegistryImages为false且RegistryImageFilter为空和UpdatedRegistryImageCnt大于0时，需要。
 * @method void setRegistryImageIds(array $RegistryImageIds) 设置根据仓库镜像Ids授权，优先权高于根据满足条件的镜像授。AllRegistryImages为false且RegistryImageFilter为空和UpdatedRegistryImageCnt大于0时，需要。
 * @method boolean getOnlyShowLatest() 获取是否仅最新的镜像；RegistryImageFilter不为空且UpdatedRegistryImageCnt大于0时仓库镜像需要。
 * @method void setOnlyShowLatest(boolean $OnlyShowLatest) 设置是否仅最新的镜像；RegistryImageFilter不为空且UpdatedRegistryImageCnt大于0时仓库镜像需要。
 */
class ModifyImageAuthorizedRequest extends AbstractModel
{
    /**
     * @var boolean 本地镜像是否全部授权的标识，优先权高于根据本地镜像ids授权。等于true时需UpdatedLocalImageCnt大于0。
     */
    public $AllLocalImages;

    /**
     * @var boolean 仓库镜像是否全部授权的标识，优先权高于根据镜像ids授权。等于true时需UpdatedRegistryImageCnt大于0。
     */
    public $AllRegistryImages;

    /**
     * @var integer 指定操作授权的本地镜像数量，判断优先权最高，实际多出的镜像随机忽略，实际不足的部分也忽略。
     */
    public $UpdatedLocalImageCnt;

    /**
     * @var integer 指定操作授权的仓库镜像数量，判断优先权最高，实际多出的镜像随机忽略，实际不足的部分也忽略；
     */
    public $UpdatedRegistryImageCnt;

    /**
     * @var string 根据满足条件的本地镜像授权,本地镜像来源；ASSETIMAGE:本地镜像列表；IMAGEALL:同步本地镜像；AllLocalImages为false且LocalImageIds为空和UpdatedLocalImageCnt大于0时，需要
     */
    public $ImageSourceType;

    /**
     * @var array 根据满足条件的本地镜像授权，AllLocalImages为false且LocalImageIds为空和UpdatedLocalImageCnt大于0时，需要。
     */
    public $LocalImageFilter;

    /**
     * @var array 根据满足条件的仓库镜像授权，AllRegistryImages为false且RegistryImageIds为空和UpdatedRegistryImageCnt大于0时，需要。
     */
    public $RegistryImageFilter;

    /**
     * @var array 根据满足条件的镜像授权,同时排除的本地镜像。
     */
    public $ExcludeLocalImageIds;

    /**
     * @var array 根据满足条件的镜像授权,同时排除的仓库镜像。
     */
    public $ExcludeRegistryImageIds;

    /**
     * @var array 根据本地镜像ids授权，优先权高于根据满足条件的镜像授权。AllLocalImages为false且LocalImageFilter为空和UpdatedLocalImageCnt大于0时，需要。
     */
    public $LocalImageIds;

    /**
     * @var array 根据仓库镜像Ids授权，优先权高于根据满足条件的镜像授。AllRegistryImages为false且RegistryImageFilter为空和UpdatedRegistryImageCnt大于0时，需要。
     */
    public $RegistryImageIds;

    /**
     * @var boolean 是否仅最新的镜像；RegistryImageFilter不为空且UpdatedRegistryImageCnt大于0时仓库镜像需要。
     */
    public $OnlyShowLatest;

    /**
     * @param boolean $AllLocalImages 本地镜像是否全部授权的标识，优先权高于根据本地镜像ids授权。等于true时需UpdatedLocalImageCnt大于0。
     * @param boolean $AllRegistryImages 仓库镜像是否全部授权的标识，优先权高于根据镜像ids授权。等于true时需UpdatedRegistryImageCnt大于0。
     * @param integer $UpdatedLocalImageCnt 指定操作授权的本地镜像数量，判断优先权最高，实际多出的镜像随机忽略，实际不足的部分也忽略。
     * @param integer $UpdatedRegistryImageCnt 指定操作授权的仓库镜像数量，判断优先权最高，实际多出的镜像随机忽略，实际不足的部分也忽略；
     * @param string $ImageSourceType 根据满足条件的本地镜像授权,本地镜像来源；ASSETIMAGE:本地镜像列表；IMAGEALL:同步本地镜像；AllLocalImages为false且LocalImageIds为空和UpdatedLocalImageCnt大于0时，需要
     * @param array $LocalImageFilter 根据满足条件的本地镜像授权，AllLocalImages为false且LocalImageIds为空和UpdatedLocalImageCnt大于0时，需要。
     * @param array $RegistryImageFilter 根据满足条件的仓库镜像授权，AllRegistryImages为false且RegistryImageIds为空和UpdatedRegistryImageCnt大于0时，需要。
     * @param array $ExcludeLocalImageIds 根据满足条件的镜像授权,同时排除的本地镜像。
     * @param array $ExcludeRegistryImageIds 根据满足条件的镜像授权,同时排除的仓库镜像。
     * @param array $LocalImageIds 根据本地镜像ids授权，优先权高于根据满足条件的镜像授权。AllLocalImages为false且LocalImageFilter为空和UpdatedLocalImageCnt大于0时，需要。
     * @param array $RegistryImageIds 根据仓库镜像Ids授权，优先权高于根据满足条件的镜像授。AllRegistryImages为false且RegistryImageFilter为空和UpdatedRegistryImageCnt大于0时，需要。
     * @param boolean $OnlyShowLatest 是否仅最新的镜像；RegistryImageFilter不为空且UpdatedRegistryImageCnt大于0时仓库镜像需要。
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
        if (array_key_exists("AllLocalImages",$param) and $param["AllLocalImages"] !== null) {
            $this->AllLocalImages = $param["AllLocalImages"];
        }

        if (array_key_exists("AllRegistryImages",$param) and $param["AllRegistryImages"] !== null) {
            $this->AllRegistryImages = $param["AllRegistryImages"];
        }

        if (array_key_exists("UpdatedLocalImageCnt",$param) and $param["UpdatedLocalImageCnt"] !== null) {
            $this->UpdatedLocalImageCnt = $param["UpdatedLocalImageCnt"];
        }

        if (array_key_exists("UpdatedRegistryImageCnt",$param) and $param["UpdatedRegistryImageCnt"] !== null) {
            $this->UpdatedRegistryImageCnt = $param["UpdatedRegistryImageCnt"];
        }

        if (array_key_exists("ImageSourceType",$param) and $param["ImageSourceType"] !== null) {
            $this->ImageSourceType = $param["ImageSourceType"];
        }

        if (array_key_exists("LocalImageFilter",$param) and $param["LocalImageFilter"] !== null) {
            $this->LocalImageFilter = [];
            foreach ($param["LocalImageFilter"] as $key => $value){
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->LocalImageFilter, $obj);
            }
        }

        if (array_key_exists("RegistryImageFilter",$param) and $param["RegistryImageFilter"] !== null) {
            $this->RegistryImageFilter = [];
            foreach ($param["RegistryImageFilter"] as $key => $value){
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->RegistryImageFilter, $obj);
            }
        }

        if (array_key_exists("ExcludeLocalImageIds",$param) and $param["ExcludeLocalImageIds"] !== null) {
            $this->ExcludeLocalImageIds = $param["ExcludeLocalImageIds"];
        }

        if (array_key_exists("ExcludeRegistryImageIds",$param) and $param["ExcludeRegistryImageIds"] !== null) {
            $this->ExcludeRegistryImageIds = $param["ExcludeRegistryImageIds"];
        }

        if (array_key_exists("LocalImageIds",$param) and $param["LocalImageIds"] !== null) {
            $this->LocalImageIds = $param["LocalImageIds"];
        }

        if (array_key_exists("RegistryImageIds",$param) and $param["RegistryImageIds"] !== null) {
            $this->RegistryImageIds = $param["RegistryImageIds"];
        }

        if (array_key_exists("OnlyShowLatest",$param) and $param["OnlyShowLatest"] !== null) {
            $this->OnlyShowLatest = $param["OnlyShowLatest"];
        }
    }
}
