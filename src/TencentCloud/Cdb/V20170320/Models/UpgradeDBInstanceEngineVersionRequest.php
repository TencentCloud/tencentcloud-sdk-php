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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeDBInstanceEngineVersion请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，格式如：cdb-c1nl9rpv 或者 cdbro-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同，可使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口获取，其值为输出参数中字段 InstanceId 的值。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，格式如：cdb-c1nl9rpv 或者 cdbro-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同，可使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口获取，其值为输出参数中字段 InstanceId 的值。
 * @method string getEngineVersion() 获取主实例数据库引擎版本，支持值包括：5.6、5.7、8.0。
说明：不支持越级升级，升级后不支持降级。
 * @method void setEngineVersion(string $EngineVersion) 设置主实例数据库引擎版本，支持值包括：5.6、5.7、8.0。
说明：不支持越级升级，升级后不支持降级。
 * @method integer getWaitSwitch() 获取切换访问新实例的方式，默认为 0。支持值包括：0 - 立刻切换，1 - 时间窗切换；当该值为 1 时，升级过程中，切换访问新实例的流程将会在时间窗内进行，或者用户主动调用接口 [切换访问新实例](https://cloud.tencent.com/document/product/236/15864) 触发该流程。
 * @method void setWaitSwitch(integer $WaitSwitch) 设置切换访问新实例的方式，默认为 0。支持值包括：0 - 立刻切换，1 - 时间窗切换；当该值为 1 时，升级过程中，切换访问新实例的流程将会在时间窗内进行，或者用户主动调用接口 [切换访问新实例](https://cloud.tencent.com/document/product/236/15864) 触发该流程。
 * @method integer getUpgradeSubversion() 获取是否是内核子版本升级，支持的值：1 - 升级内核子版本；0 - 升级数据库引擎版本。无默认值，请指定要升级的版本类型。
 * @method void setUpgradeSubversion(integer $UpgradeSubversion) 设置是否是内核子版本升级，支持的值：1 - 升级内核子版本；0 - 升级数据库引擎版本。无默认值，请指定要升级的版本类型。
 * @method integer getMaxDelayTime() 获取延迟阈值。取值范围：1 - 10。无默认值，不传此参数时，延迟阈值为0，表示延迟阈值不做设置。
 * @method void setMaxDelayTime(integer $MaxDelayTime) 设置延迟阈值。取值范围：1 - 10。无默认值，不传此参数时，延迟阈值为0，表示延迟阈值不做设置。
 * @method integer getIgnoreErrKeyword() 获取5.7升级8.0是否忽略关键字错误，取值范围[0,1]，1表示忽略，0表示不忽略。无默认值，不传此参数表示不做处理。
 * @method void setIgnoreErrKeyword(integer $IgnoreErrKeyword) 设置5.7升级8.0是否忽略关键字错误，取值范围[0,1]，1表示忽略，0表示不忽略。无默认值，不传此参数表示不做处理。
 * @method array getParamList() 获取版本升级支持指定参数
 * @method void setParamList(array $ParamList) 设置版本升级支持指定参数
 */
class UpgradeDBInstanceEngineVersionRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，格式如：cdb-c1nl9rpv 或者 cdbro-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同，可使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口获取，其值为输出参数中字段 InstanceId 的值。
     */
    public $InstanceId;

    /**
     * @var string 主实例数据库引擎版本，支持值包括：5.6、5.7、8.0。
说明：不支持越级升级，升级后不支持降级。
     */
    public $EngineVersion;

    /**
     * @var integer 切换访问新实例的方式，默认为 0。支持值包括：0 - 立刻切换，1 - 时间窗切换；当该值为 1 时，升级过程中，切换访问新实例的流程将会在时间窗内进行，或者用户主动调用接口 [切换访问新实例](https://cloud.tencent.com/document/product/236/15864) 触发该流程。
     */
    public $WaitSwitch;

    /**
     * @var integer 是否是内核子版本升级，支持的值：1 - 升级内核子版本；0 - 升级数据库引擎版本。无默认值，请指定要升级的版本类型。
     */
    public $UpgradeSubversion;

    /**
     * @var integer 延迟阈值。取值范围：1 - 10。无默认值，不传此参数时，延迟阈值为0，表示延迟阈值不做设置。
     */
    public $MaxDelayTime;

    /**
     * @var integer 5.7升级8.0是否忽略关键字错误，取值范围[0,1]，1表示忽略，0表示不忽略。无默认值，不传此参数表示不做处理。
     */
    public $IgnoreErrKeyword;

    /**
     * @var array 版本升级支持指定参数
     */
    public $ParamList;

    /**
     * @param string $InstanceId 实例 ID，格式如：cdb-c1nl9rpv 或者 cdbro-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同，可使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口获取，其值为输出参数中字段 InstanceId 的值。
     * @param string $EngineVersion 主实例数据库引擎版本，支持值包括：5.6、5.7、8.0。
说明：不支持越级升级，升级后不支持降级。
     * @param integer $WaitSwitch 切换访问新实例的方式，默认为 0。支持值包括：0 - 立刻切换，1 - 时间窗切换；当该值为 1 时，升级过程中，切换访问新实例的流程将会在时间窗内进行，或者用户主动调用接口 [切换访问新实例](https://cloud.tencent.com/document/product/236/15864) 触发该流程。
     * @param integer $UpgradeSubversion 是否是内核子版本升级，支持的值：1 - 升级内核子版本；0 - 升级数据库引擎版本。无默认值，请指定要升级的版本类型。
     * @param integer $MaxDelayTime 延迟阈值。取值范围：1 - 10。无默认值，不传此参数时，延迟阈值为0，表示延迟阈值不做设置。
     * @param integer $IgnoreErrKeyword 5.7升级8.0是否忽略关键字错误，取值范围[0,1]，1表示忽略，0表示不忽略。无默认值，不传此参数表示不做处理。
     * @param array $ParamList 版本升级支持指定参数
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("WaitSwitch",$param) and $param["WaitSwitch"] !== null) {
            $this->WaitSwitch = $param["WaitSwitch"];
        }

        if (array_key_exists("UpgradeSubversion",$param) and $param["UpgradeSubversion"] !== null) {
            $this->UpgradeSubversion = $param["UpgradeSubversion"];
        }

        if (array_key_exists("MaxDelayTime",$param) and $param["MaxDelayTime"] !== null) {
            $this->MaxDelayTime = $param["MaxDelayTime"];
        }

        if (array_key_exists("IgnoreErrKeyword",$param) and $param["IgnoreErrKeyword"] !== null) {
            $this->IgnoreErrKeyword = $param["IgnoreErrKeyword"];
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new UpgradeEngineVersionParams();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }
    }
}
