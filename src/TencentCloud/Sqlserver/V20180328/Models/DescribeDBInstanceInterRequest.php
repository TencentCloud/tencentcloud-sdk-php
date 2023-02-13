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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstanceInter请求参数结构体
 *
 * @method integer getLimit() 获取分页，页大小，范围是1-100
 * @method void setLimit(integer $Limit) 设置分页，页大小，范围是1-100
 * @method string getInstanceId() 获取按照实例ID筛选
 * @method void setInstanceId(string $InstanceId) 设置按照实例ID筛选
 * @method integer getStatus() 获取按照状态筛选 1-互通IP打开中；2-互通IP已经打开；3-加入到互通组中；4-已加入到互通组；5-互通IP回收中；6-互通IP已回收；7-从互通组移除中；8-已从互通组中移除
 * @method void setStatus(integer $Status) 设置按照状态筛选 1-互通IP打开中；2-互通IP已经打开；3-加入到互通组中；4-已加入到互通组；5-互通IP回收中；6-互通IP已回收；7-从互通组移除中；8-已从互通组中移除
 * @method array getVersionSet() 获取实例版本代号列表
 * @method void setVersionSet(array $VersionSet) 设置实例版本代号列表
 * @method string getZone() 获取实例所在可用区，格式如：ap-guangzhou-2
 * @method void setZone(string $Zone) 设置实例所在可用区，格式如：ap-guangzhou-2
 * @method integer getOffset() 获取分页，页数，默认是0
 * @method void setOffset(integer $Offset) 设置分页，页数，默认是0
 */
class DescribeDBInstanceInterRequest extends AbstractModel
{
    /**
     * @var integer 分页，页大小，范围是1-100
     */
    public $Limit;

    /**
     * @var string 按照实例ID筛选
     */
    public $InstanceId;

    /**
     * @var integer 按照状态筛选 1-互通IP打开中；2-互通IP已经打开；3-加入到互通组中；4-已加入到互通组；5-互通IP回收中；6-互通IP已回收；7-从互通组移除中；8-已从互通组中移除
     */
    public $Status;

    /**
     * @var array 实例版本代号列表
     */
    public $VersionSet;

    /**
     * @var string 实例所在可用区，格式如：ap-guangzhou-2
     */
    public $Zone;

    /**
     * @var integer 分页，页数，默认是0
     */
    public $Offset;

    /**
     * @param integer $Limit 分页，页大小，范围是1-100
     * @param string $InstanceId 按照实例ID筛选
     * @param integer $Status 按照状态筛选 1-互通IP打开中；2-互通IP已经打开；3-加入到互通组中；4-已加入到互通组；5-互通IP回收中；6-互通IP已回收；7-从互通组移除中；8-已从互通组中移除
     * @param array $VersionSet 实例版本代号列表
     * @param string $Zone 实例所在可用区，格式如：ap-guangzhou-2
     * @param integer $Offset 分页，页数，默认是0
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VersionSet",$param) and $param["VersionSet"] !== null) {
            $this->VersionSet = $param["VersionSet"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
