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
 * ModifyAssetImageScanStop请求参数结构体
 *
 * @method string getTaskID() 获取任务id；任务id，镜像id和根据过滤条件筛选三选一。
 * @method void setTaskID(string $TaskID) 设置任务id；任务id，镜像id和根据过滤条件筛选三选一。
 * @method array getImages() 获取镜像id；任务id，镜像id和根据过滤条件筛选三选一。
 * @method void setImages(array $Images) 设置镜像id；任务id，镜像id和根据过滤条件筛选三选一。
 * @method array getFilters() 获取根据过滤条件筛选出镜像；任务id，镜像id和根据过滤条件筛选三选一。
 * @method void setFilters(array $Filters) 设置根据过滤条件筛选出镜像；任务id，镜像id和根据过滤条件筛选三选一。
 * @method string getExcludeImageIds() 获取根据过滤条件筛选出镜像，再排除个别镜像
 * @method void setExcludeImageIds(string $ExcludeImageIds) 设置根据过滤条件筛选出镜像，再排除个别镜像
 */
class ModifyAssetImageScanStopRequest extends AbstractModel
{
    /**
     * @var string 任务id；任务id，镜像id和根据过滤条件筛选三选一。
     */
    public $TaskID;

    /**
     * @var array 镜像id；任务id，镜像id和根据过滤条件筛选三选一。
     */
    public $Images;

    /**
     * @var array 根据过滤条件筛选出镜像；任务id，镜像id和根据过滤条件筛选三选一。
     */
    public $Filters;

    /**
     * @var string 根据过滤条件筛选出镜像，再排除个别镜像
     */
    public $ExcludeImageIds;

    /**
     * @param string $TaskID 任务id；任务id，镜像id和根据过滤条件筛选三选一。
     * @param array $Images 镜像id；任务id，镜像id和根据过滤条件筛选三选一。
     * @param array $Filters 根据过滤条件筛选出镜像；任务id，镜像id和根据过滤条件筛选三选一。
     * @param string $ExcludeImageIds 根据过滤条件筛选出镜像，再排除个别镜像
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
        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = $param["Images"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ExcludeImageIds",$param) and $param["ExcludeImageIds"] !== null) {
            $this->ExcludeImageIds = $param["ExcludeImageIds"];
        }
    }
}
