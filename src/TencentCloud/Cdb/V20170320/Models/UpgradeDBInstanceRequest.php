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
 * UpgradeDBInstance请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID，格式如：cdb-c1nl9rpv 或者 cdbro-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同，可使用 <a href="https://cloud.tencent.com/document/api/236/15872">查询实例列表</a> 接口获取，其值为输出参数中字段 InstanceId 的值。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID，格式如：cdb-c1nl9rpv 或者 cdbro-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同，可使用 <a href="https://cloud.tencent.com/document/api/236/15872">查询实例列表</a> 接口获取，其值为输出参数中字段 InstanceId 的值。</p>
 * @method integer getMemory() 获取<p>升级后的内存大小，单位：MB，为保证传入 Memory 值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/17229">获取云数据库可售卖规格</a> 接口获取可升级的内存规格。<br>说明：如果进行迁移业务，请一定填写实例规格（CPU、内存），不然系统会默认以最小允许规格传参。</p>
 * @method void setMemory(integer $Memory) 设置<p>升级后的内存大小，单位：MB，为保证传入 Memory 值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/17229">获取云数据库可售卖规格</a> 接口获取可升级的内存规格。<br>说明：如果进行迁移业务，请一定填写实例规格（CPU、内存），不然系统会默认以最小允许规格传参。</p>
 * @method integer getVolume() 获取<p>升级后的硬盘大小，单位：GB，为保证传入 Volume 值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/17229">获取云数据库可售卖规格</a> 接口获取可升级的硬盘范围。</p>
 * @method void setVolume(integer $Volume) 设置<p>升级后的硬盘大小，单位：GB，为保证传入 Volume 值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/17229">获取云数据库可售卖规格</a> 接口获取可升级的硬盘范围。</p>
 * @method integer getProtectMode() 获取<p>数据复制方式，支持值包括：0 - 异步复制，1 - 半同步复制，2 - 强同步复制，升级主实例时可指定该参数，升级只读实例或者灾备实例时指定该参数无意义。</p>
 * @method void setProtectMode(integer $ProtectMode) 设置<p>数据复制方式，支持值包括：0 - 异步复制，1 - 半同步复制，2 - 强同步复制，升级主实例时可指定该参数，升级只读实例或者灾备实例时指定该参数无意义。</p>
 * @method integer getDeployMode() 获取<p>部署模式，默认为 0，支持值包括：0 - 单可用区部署，1 - 多可用区部署，升级主实例时可指定该参数，升级只读实例或者灾备实例时指定该参数无意义。</p>
 * @method void setDeployMode(integer $DeployMode) 设置<p>部署模式，默认为 0，支持值包括：0 - 单可用区部署，1 - 多可用区部署，升级主实例时可指定该参数，升级只读实例或者灾备实例时指定该参数无意义。</p>
 * @method string getSlaveZone() 获取<p>备库1的可用区信息，默认和实例的 Zone 参数一致，升级主实例为多可用区部署时可指定该参数，升级只读实例或者灾备实例时指定该参数无意义。可通过 <a href="https://cloud.tencent.com/document/product/236/17229">获取云数据库可售卖规格</a> 接口查询支持的可用区。</p>
 * @method void setSlaveZone(string $SlaveZone) 设置<p>备库1的可用区信息，默认和实例的 Zone 参数一致，升级主实例为多可用区部署时可指定该参数，升级只读实例或者灾备实例时指定该参数无意义。可通过 <a href="https://cloud.tencent.com/document/product/236/17229">获取云数据库可售卖规格</a> 接口查询支持的可用区。</p>
 * @method string getEngineVersion() 获取<p>主实例数据库引擎版本，支持值包括：5.5、5.6、5.7、8.0。<br>说明：升级数据库版本请使用 <a href="https://cloud.tencent.com/document/api/236/15870">UpgradeDBInstanceEngineVersion</a> 接口。</p>
 * @method void setEngineVersion(string $EngineVersion) 设置<p>主实例数据库引擎版本，支持值包括：5.5、5.6、5.7、8.0。<br>说明：升级数据库版本请使用 <a href="https://cloud.tencent.com/document/api/236/15870">UpgradeDBInstanceEngineVersion</a> 接口。</p>
 * @method integer getWaitSwitch() 获取<p>切换访问新实例的方式，默认为 0。支持值包括：0 - 立刻切换，1 - 时间窗切换；当该值为 1 时，升级过程中，切换访问新实例的流程将会在时间窗内进行，或者用户主动调用接口 <a href="https://cloud.tencent.com/document/product/236/15864">切换访问新实例</a> 触发该流程。</p>
 * @method void setWaitSwitch(integer $WaitSwitch) 设置<p>切换访问新实例的方式，默认为 0。支持值包括：0 - 立刻切换，1 - 时间窗切换；当该值为 1 时，升级过程中，切换访问新实例的流程将会在时间窗内进行，或者用户主动调用接口 <a href="https://cloud.tencent.com/document/product/236/15864">切换访问新实例</a> 触发该流程。</p>
 * @method string getBackupZone() 获取<p>备库2的可用区信息，默认为空，升级主实例时可指定该参数，升级只读实例或者灾备实例时指定该参数无意义。可通过 <a href="https://cloud.tencent.com/document/product/236/17229">获取云数据库可售卖规格</a> 接口查询支持的可用区。<br>备注：如您要将三节点降级至双节点，将该参数设置为空值即可实现。</p>
 * @method void setBackupZone(string $BackupZone) 设置<p>备库2的可用区信息，默认为空，升级主实例时可指定该参数，升级只读实例或者灾备实例时指定该参数无意义。可通过 <a href="https://cloud.tencent.com/document/product/236/17229">获取云数据库可售卖规格</a> 接口查询支持的可用区。<br>备注：如您要将三节点降级至双节点，将该参数设置为空值即可实现。</p>
 * @method string getInstanceRole() 获取<p>实例类型，默认为 master，支持值包括：master - 表示主实例，dr - 表示灾备实例，ro - 表示只读实例。</p>
 * @method void setInstanceRole(string $InstanceRole) 设置<p>实例类型，默认为 master，支持值包括：master - 表示主实例，dr - 表示灾备实例，ro - 表示只读实例。</p>
 * @method string getDeviceType() 获取<p>实例隔离类型。支持值包括： &quot;UNIVERSAL&quot; - 通用型实例， &quot;EXCLUSIVE&quot; - 独享型实例， &quot;BASIC&quot; - 基础版实例。</p>
 * @method void setDeviceType(string $DeviceType) 设置<p>实例隔离类型。支持值包括： &quot;UNIVERSAL&quot; - 通用型实例， &quot;EXCLUSIVE&quot; - 独享型实例， &quot;BASIC&quot; - 基础版实例。</p>
 * @method integer getCpu() 获取<p>升级后的实例cpu核数，如果不传将根据 Memory 指定的内存值自动填充最小允许规格的cpu值。<br>说明：如果进行迁移业务，请一定填写实例规格（CPU、内存），不然系统会默认以最小允许规格传参。</p>
 * @method void setCpu(integer $Cpu) 设置<p>升级后的实例cpu核数，如果不传将根据 Memory 指定的内存值自动填充最小允许规格的cpu值。<br>说明：如果进行迁移业务，请一定填写实例规格（CPU、内存），不然系统会默认以最小允许规格传参。</p>
 * @method integer getFastUpgrade() 获取<p>是否极速变配。0-普通升级，1-极速变配，2 极速优先。选择极速变配会根据资源状况校验是否可以进行极速变配，满足条件则进行极速变配，不满足条件会返回报错信息。</p>
 * @method void setFastUpgrade(integer $FastUpgrade) 设置<p>是否极速变配。0-普通升级，1-极速变配，2 极速优先。选择极速变配会根据资源状况校验是否可以进行极速变配，满足条件则进行极速变配，不满足条件会返回报错信息。</p>
 * @method integer getMaxDelayTime() 获取<p>延迟阈值。取值范围1~10，默认值为10。</p>
 * @method void setMaxDelayTime(integer $MaxDelayTime) 设置<p>延迟阈值。取值范围1~10，默认值为10。</p>
 * @method integer getCrossCluster() 获取<p>是否跨区迁移。0-普通迁移，1-跨区迁移，默认值为0。该值为1时支持变更实例主节点可用区。</p>
 * @method void setCrossCluster(integer $CrossCluster) 设置<p>是否跨区迁移。0-普通迁移，1-跨区迁移，默认值为0。该值为1时支持变更实例主节点可用区。</p>
 * @method string getZoneId() 获取<p>主节点可用区，该值仅在跨区迁移时生效。仅支持同地域下的可用区进行迁移。</p>
 * @method void setZoneId(string $ZoneId) 设置<p>主节点可用区，该值仅在跨区迁移时生效。仅支持同地域下的可用区进行迁移。</p>
 * @method string getRoTransType() 获取<p>针对跨集群搬迁场景，选择同可用区RO的处理逻辑。together-同可用区RO跟随主实例迁移至目标可用区（默认选项），severally-同可用区RO保持原部署模式、不迁移至目标可用区。</p>
 * @method void setRoTransType(string $RoTransType) 设置<p>针对跨集群搬迁场景，选择同可用区RO的处理逻辑。together-同可用区RO跟随主实例迁移至目标可用区（默认选项），severally-同可用区RO保持原部署模式、不迁移至目标可用区。</p>
 * @method ClusterTopology getClusterTopology() 获取<p>云盘版节点拓扑配置。</p>
 * @method void setClusterTopology(ClusterTopology $ClusterTopology) 设置<p>云盘版节点拓扑配置。</p>
 * @method integer getCheckFastUpgradeReboot() 获取<p>检查原地升级是否需要重启，1 检查， 0 不检查。如果值为1，检查为原地升级需要重启，则会停止升级并进行返回提示，如果为原地升级不重启，则正常执行升级流程。</p>
 * @method void setCheckFastUpgradeReboot(integer $CheckFastUpgradeReboot) 设置<p>检查原地升级是否需要重启，1 检查， 0 不检查。如果值为1，检查为原地升级需要重启，则会停止升级并进行返回提示，如果为原地升级不重启，则正常执行升级流程。</p>
 * @method string getDataCheckSensitive() 获取<p>数据校验敏感度，非极速变配时使用此参数，敏感度根据当前实例规格计算迁移过程中的数据对比使用的cpu资源<br>对应的选项为: &quot;high&quot;、&quot;normal&quot;、&quot;low&quot;，默认为空<br>参数详解，：<br>&quot;high&quot;: 对应控制台中的高，数据库负载过高不建议使用<br>&quot;normal&quot;：对应控制台中的标准<br>&quot;low&quot;：对应控制台中的低</p>
 * @method void setDataCheckSensitive(string $DataCheckSensitive) 设置<p>数据校验敏感度，非极速变配时使用此参数，敏感度根据当前实例规格计算迁移过程中的数据对比使用的cpu资源<br>对应的选项为: &quot;high&quot;、&quot;normal&quot;、&quot;low&quot;，默认为空<br>参数详解，：<br>&quot;high&quot;: 对应控制台中的高，数据库负载过高不建议使用<br>&quot;normal&quot;：对应控制台中的标准<br>&quot;low&quot;：对应控制台中的低</p>
 */
class UpgradeDBInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID，格式如：cdb-c1nl9rpv 或者 cdbro-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同，可使用 <a href="https://cloud.tencent.com/document/api/236/15872">查询实例列表</a> 接口获取，其值为输出参数中字段 InstanceId 的值。</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>升级后的内存大小，单位：MB，为保证传入 Memory 值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/17229">获取云数据库可售卖规格</a> 接口获取可升级的内存规格。<br>说明：如果进行迁移业务，请一定填写实例规格（CPU、内存），不然系统会默认以最小允许规格传参。</p>
     */
    public $Memory;

    /**
     * @var integer <p>升级后的硬盘大小，单位：GB，为保证传入 Volume 值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/17229">获取云数据库可售卖规格</a> 接口获取可升级的硬盘范围。</p>
     */
    public $Volume;

    /**
     * @var integer <p>数据复制方式，支持值包括：0 - 异步复制，1 - 半同步复制，2 - 强同步复制，升级主实例时可指定该参数，升级只读实例或者灾备实例时指定该参数无意义。</p>
     */
    public $ProtectMode;

    /**
     * @var integer <p>部署模式，默认为 0，支持值包括：0 - 单可用区部署，1 - 多可用区部署，升级主实例时可指定该参数，升级只读实例或者灾备实例时指定该参数无意义。</p>
     */
    public $DeployMode;

    /**
     * @var string <p>备库1的可用区信息，默认和实例的 Zone 参数一致，升级主实例为多可用区部署时可指定该参数，升级只读实例或者灾备实例时指定该参数无意义。可通过 <a href="https://cloud.tencent.com/document/product/236/17229">获取云数据库可售卖规格</a> 接口查询支持的可用区。</p>
     */
    public $SlaveZone;

    /**
     * @var string <p>主实例数据库引擎版本，支持值包括：5.5、5.6、5.7、8.0。<br>说明：升级数据库版本请使用 <a href="https://cloud.tencent.com/document/api/236/15870">UpgradeDBInstanceEngineVersion</a> 接口。</p>
     */
    public $EngineVersion;

    /**
     * @var integer <p>切换访问新实例的方式，默认为 0。支持值包括：0 - 立刻切换，1 - 时间窗切换；当该值为 1 时，升级过程中，切换访问新实例的流程将会在时间窗内进行，或者用户主动调用接口 <a href="https://cloud.tencent.com/document/product/236/15864">切换访问新实例</a> 触发该流程。</p>
     */
    public $WaitSwitch;

    /**
     * @var string <p>备库2的可用区信息，默认为空，升级主实例时可指定该参数，升级只读实例或者灾备实例时指定该参数无意义。可通过 <a href="https://cloud.tencent.com/document/product/236/17229">获取云数据库可售卖规格</a> 接口查询支持的可用区。<br>备注：如您要将三节点降级至双节点，将该参数设置为空值即可实现。</p>
     */
    public $BackupZone;

    /**
     * @var string <p>实例类型，默认为 master，支持值包括：master - 表示主实例，dr - 表示灾备实例，ro - 表示只读实例。</p>
     */
    public $InstanceRole;

    /**
     * @var string <p>实例隔离类型。支持值包括： &quot;UNIVERSAL&quot; - 通用型实例， &quot;EXCLUSIVE&quot; - 独享型实例， &quot;BASIC&quot; - 基础版实例。</p>
     */
    public $DeviceType;

    /**
     * @var integer <p>升级后的实例cpu核数，如果不传将根据 Memory 指定的内存值自动填充最小允许规格的cpu值。<br>说明：如果进行迁移业务，请一定填写实例规格（CPU、内存），不然系统会默认以最小允许规格传参。</p>
     */
    public $Cpu;

    /**
     * @var integer <p>是否极速变配。0-普通升级，1-极速变配，2 极速优先。选择极速变配会根据资源状况校验是否可以进行极速变配，满足条件则进行极速变配，不满足条件会返回报错信息。</p>
     */
    public $FastUpgrade;

    /**
     * @var integer <p>延迟阈值。取值范围1~10，默认值为10。</p>
     */
    public $MaxDelayTime;

    /**
     * @var integer <p>是否跨区迁移。0-普通迁移，1-跨区迁移，默认值为0。该值为1时支持变更实例主节点可用区。</p>
     */
    public $CrossCluster;

    /**
     * @var string <p>主节点可用区，该值仅在跨区迁移时生效。仅支持同地域下的可用区进行迁移。</p>
     */
    public $ZoneId;

    /**
     * @var string <p>针对跨集群搬迁场景，选择同可用区RO的处理逻辑。together-同可用区RO跟随主实例迁移至目标可用区（默认选项），severally-同可用区RO保持原部署模式、不迁移至目标可用区。</p>
     */
    public $RoTransType;

    /**
     * @var ClusterTopology <p>云盘版节点拓扑配置。</p>
     */
    public $ClusterTopology;

    /**
     * @var integer <p>检查原地升级是否需要重启，1 检查， 0 不检查。如果值为1，检查为原地升级需要重启，则会停止升级并进行返回提示，如果为原地升级不重启，则正常执行升级流程。</p>
     */
    public $CheckFastUpgradeReboot;

    /**
     * @var string <p>数据校验敏感度，非极速变配时使用此参数，敏感度根据当前实例规格计算迁移过程中的数据对比使用的cpu资源<br>对应的选项为: &quot;high&quot;、&quot;normal&quot;、&quot;low&quot;，默认为空<br>参数详解，：<br>&quot;high&quot;: 对应控制台中的高，数据库负载过高不建议使用<br>&quot;normal&quot;：对应控制台中的标准<br>&quot;low&quot;：对应控制台中的低</p>
     */
    public $DataCheckSensitive;

    /**
     * @param string $InstanceId <p>实例 ID，格式如：cdb-c1nl9rpv 或者 cdbro-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同，可使用 <a href="https://cloud.tencent.com/document/api/236/15872">查询实例列表</a> 接口获取，其值为输出参数中字段 InstanceId 的值。</p>
     * @param integer $Memory <p>升级后的内存大小，单位：MB，为保证传入 Memory 值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/17229">获取云数据库可售卖规格</a> 接口获取可升级的内存规格。<br>说明：如果进行迁移业务，请一定填写实例规格（CPU、内存），不然系统会默认以最小允许规格传参。</p>
     * @param integer $Volume <p>升级后的硬盘大小，单位：GB，为保证传入 Volume 值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/17229">获取云数据库可售卖规格</a> 接口获取可升级的硬盘范围。</p>
     * @param integer $ProtectMode <p>数据复制方式，支持值包括：0 - 异步复制，1 - 半同步复制，2 - 强同步复制，升级主实例时可指定该参数，升级只读实例或者灾备实例时指定该参数无意义。</p>
     * @param integer $DeployMode <p>部署模式，默认为 0，支持值包括：0 - 单可用区部署，1 - 多可用区部署，升级主实例时可指定该参数，升级只读实例或者灾备实例时指定该参数无意义。</p>
     * @param string $SlaveZone <p>备库1的可用区信息，默认和实例的 Zone 参数一致，升级主实例为多可用区部署时可指定该参数，升级只读实例或者灾备实例时指定该参数无意义。可通过 <a href="https://cloud.tencent.com/document/product/236/17229">获取云数据库可售卖规格</a> 接口查询支持的可用区。</p>
     * @param string $EngineVersion <p>主实例数据库引擎版本，支持值包括：5.5、5.6、5.7、8.0。<br>说明：升级数据库版本请使用 <a href="https://cloud.tencent.com/document/api/236/15870">UpgradeDBInstanceEngineVersion</a> 接口。</p>
     * @param integer $WaitSwitch <p>切换访问新实例的方式，默认为 0。支持值包括：0 - 立刻切换，1 - 时间窗切换；当该值为 1 时，升级过程中，切换访问新实例的流程将会在时间窗内进行，或者用户主动调用接口 <a href="https://cloud.tencent.com/document/product/236/15864">切换访问新实例</a> 触发该流程。</p>
     * @param string $BackupZone <p>备库2的可用区信息，默认为空，升级主实例时可指定该参数，升级只读实例或者灾备实例时指定该参数无意义。可通过 <a href="https://cloud.tencent.com/document/product/236/17229">获取云数据库可售卖规格</a> 接口查询支持的可用区。<br>备注：如您要将三节点降级至双节点，将该参数设置为空值即可实现。</p>
     * @param string $InstanceRole <p>实例类型，默认为 master，支持值包括：master - 表示主实例，dr - 表示灾备实例，ro - 表示只读实例。</p>
     * @param string $DeviceType <p>实例隔离类型。支持值包括： &quot;UNIVERSAL&quot; - 通用型实例， &quot;EXCLUSIVE&quot; - 独享型实例， &quot;BASIC&quot; - 基础版实例。</p>
     * @param integer $Cpu <p>升级后的实例cpu核数，如果不传将根据 Memory 指定的内存值自动填充最小允许规格的cpu值。<br>说明：如果进行迁移业务，请一定填写实例规格（CPU、内存），不然系统会默认以最小允许规格传参。</p>
     * @param integer $FastUpgrade <p>是否极速变配。0-普通升级，1-极速变配，2 极速优先。选择极速变配会根据资源状况校验是否可以进行极速变配，满足条件则进行极速变配，不满足条件会返回报错信息。</p>
     * @param integer $MaxDelayTime <p>延迟阈值。取值范围1~10，默认值为10。</p>
     * @param integer $CrossCluster <p>是否跨区迁移。0-普通迁移，1-跨区迁移，默认值为0。该值为1时支持变更实例主节点可用区。</p>
     * @param string $ZoneId <p>主节点可用区，该值仅在跨区迁移时生效。仅支持同地域下的可用区进行迁移。</p>
     * @param string $RoTransType <p>针对跨集群搬迁场景，选择同可用区RO的处理逻辑。together-同可用区RO跟随主实例迁移至目标可用区（默认选项），severally-同可用区RO保持原部署模式、不迁移至目标可用区。</p>
     * @param ClusterTopology $ClusterTopology <p>云盘版节点拓扑配置。</p>
     * @param integer $CheckFastUpgradeReboot <p>检查原地升级是否需要重启，1 检查， 0 不检查。如果值为1，检查为原地升级需要重启，则会停止升级并进行返回提示，如果为原地升级不重启，则正常执行升级流程。</p>
     * @param string $DataCheckSensitive <p>数据校验敏感度，非极速变配时使用此参数，敏感度根据当前实例规格计算迁移过程中的数据对比使用的cpu资源<br>对应的选项为: &quot;high&quot;、&quot;normal&quot;、&quot;low&quot;，默认为空<br>参数详解，：<br>&quot;high&quot;: 对应控制台中的高，数据库负载过高不建议使用<br>&quot;normal&quot;：对应控制台中的标准<br>&quot;low&quot;：对应控制台中的低</p>
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

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("ProtectMode",$param) and $param["ProtectMode"] !== null) {
            $this->ProtectMode = $param["ProtectMode"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("SlaveZone",$param) and $param["SlaveZone"] !== null) {
            $this->SlaveZone = $param["SlaveZone"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("WaitSwitch",$param) and $param["WaitSwitch"] !== null) {
            $this->WaitSwitch = $param["WaitSwitch"];
        }

        if (array_key_exists("BackupZone",$param) and $param["BackupZone"] !== null) {
            $this->BackupZone = $param["BackupZone"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("FastUpgrade",$param) and $param["FastUpgrade"] !== null) {
            $this->FastUpgrade = $param["FastUpgrade"];
        }

        if (array_key_exists("MaxDelayTime",$param) and $param["MaxDelayTime"] !== null) {
            $this->MaxDelayTime = $param["MaxDelayTime"];
        }

        if (array_key_exists("CrossCluster",$param) and $param["CrossCluster"] !== null) {
            $this->CrossCluster = $param["CrossCluster"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("RoTransType",$param) and $param["RoTransType"] !== null) {
            $this->RoTransType = $param["RoTransType"];
        }

        if (array_key_exists("ClusterTopology",$param) and $param["ClusterTopology"] !== null) {
            $this->ClusterTopology = new ClusterTopology();
            $this->ClusterTopology->deserialize($param["ClusterTopology"]);
        }

        if (array_key_exists("CheckFastUpgradeReboot",$param) and $param["CheckFastUpgradeReboot"] !== null) {
            $this->CheckFastUpgradeReboot = $param["CheckFastUpgradeReboot"];
        }

        if (array_key_exists("DataCheckSensitive",$param) and $param["DataCheckSensitive"] !== null) {
            $this->DataCheckSensitive = $param["DataCheckSensitive"];
        }
    }
}
