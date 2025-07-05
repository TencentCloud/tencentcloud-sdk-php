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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCanNotSeparateMachine请求参数结构体
 *
 * @method array getIds() 获取需要修改的事件id 数组，支持批量
 * @method void setIds(array $Ids) 设置需要修改的事件id 数组，支持批量
 * @method boolean getUpdateAll() 获取是否更新全部，即是否对所有的事件进行操作，当ids 不为空时，此参数无效
 * @method void setUpdateAll(boolean $UpdateAll) 设置是否更新全部，即是否对所有的事件进行操作，当ids 不为空时，此参数无效
 * @method array getExcludeId() 获取排除的事件id,当操作全部事件时，需要排除这次id
 * @method void setExcludeId(array $ExcludeId) 设置排除的事件id,当操作全部事件时，需要排除这次id
 * @method array getFilters() 获取<li>IpOrAlias - String - 是否必填：否 - 主机ip或别名筛选</li>
<li>FilePath - String - 是否必填：否 - 路径筛选</li>
<li>VirusName - String - 是否必填：否 - 描述筛选</li>
<li>CreateBeginTime - String - 是否必填：否 - 创建时间筛选-开始时间</li>
<li>CreateEndTime - String - 是否必填：否 - 创建时间筛选-结束时间</li>
<li>Status - String - 是否必填：否 - 状态筛选 4待处理,5信任,6已隔离,10隔离中,11恢复隔离中</li>
 * @method void setFilters(array $Filters) 设置<li>IpOrAlias - String - 是否必填：否 - 主机ip或别名筛选</li>
<li>FilePath - String - 是否必填：否 - 路径筛选</li>
<li>VirusName - String - 是否必填：否 - 描述筛选</li>
<li>CreateBeginTime - String - 是否必填：否 - 创建时间筛选-开始时间</li>
<li>CreateEndTime - String - 是否必填：否 - 创建时间筛选-结束时间</li>
<li>Status - String - 是否必填：否 - 状态筛选 4待处理,5信任,6已隔离,10隔离中,11恢复隔离中</li>
 */
class DescribeCanNotSeparateMachineRequest extends AbstractModel
{
    /**
     * @var array 需要修改的事件id 数组，支持批量
     */
    public $Ids;

    /**
     * @var boolean 是否更新全部，即是否对所有的事件进行操作，当ids 不为空时，此参数无效
     */
    public $UpdateAll;

    /**
     * @var array 排除的事件id,当操作全部事件时，需要排除这次id
     */
    public $ExcludeId;

    /**
     * @var array <li>IpOrAlias - String - 是否必填：否 - 主机ip或别名筛选</li>
<li>FilePath - String - 是否必填：否 - 路径筛选</li>
<li>VirusName - String - 是否必填：否 - 描述筛选</li>
<li>CreateBeginTime - String - 是否必填：否 - 创建时间筛选-开始时间</li>
<li>CreateEndTime - String - 是否必填：否 - 创建时间筛选-结束时间</li>
<li>Status - String - 是否必填：否 - 状态筛选 4待处理,5信任,6已隔离,10隔离中,11恢复隔离中</li>
     */
    public $Filters;

    /**
     * @param array $Ids 需要修改的事件id 数组，支持批量
     * @param boolean $UpdateAll 是否更新全部，即是否对所有的事件进行操作，当ids 不为空时，此参数无效
     * @param array $ExcludeId 排除的事件id,当操作全部事件时，需要排除这次id
     * @param array $Filters <li>IpOrAlias - String - 是否必填：否 - 主机ip或别名筛选</li>
<li>FilePath - String - 是否必填：否 - 路径筛选</li>
<li>VirusName - String - 是否必填：否 - 描述筛选</li>
<li>CreateBeginTime - String - 是否必填：否 - 创建时间筛选-开始时间</li>
<li>CreateEndTime - String - 是否必填：否 - 创建时间筛选-结束时间</li>
<li>Status - String - 是否必填：否 - 状态筛选 4待处理,5信任,6已隔离,10隔离中,11恢复隔离中</li>
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
        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("UpdateAll",$param) and $param["UpdateAll"] !== null) {
            $this->UpdateAll = $param["UpdateAll"];
        }

        if (array_key_exists("ExcludeId",$param) and $param["ExcludeId"] !== null) {
            $this->ExcludeId = $param["ExcludeId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
